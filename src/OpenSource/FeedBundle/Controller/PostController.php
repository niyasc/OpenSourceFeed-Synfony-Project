<?php

namespace OpenSource\FeedBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use OpenSource\FeedBundle\Entity\Post;
use OpenSource\FeedBundle\Form\PostType;
use OpenSource\FeedBundle\Form\CommentType;
use OpenSource\FeedBundle\Controller\CommentController as CommentController;
use OpenSource\FeedBundle\Entity\Comment;

/**
* Post controller.
*
* @Route("/post")
*/
class PostController extends Controller
{

  /**
  * Lists all Post entities.
  *
  * @Route("/", name="post")
  * @Method("GET")
  * @Template()
  */
  public function indexAction(Request $request)
  {
    $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
    $em = $this->getDoctrine()->getManager();

    $dql   = "SELECT a FROM OpenSourceFeedBundle:Post a";
    $query = $em->createQuery($dql);

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate($query,
    $request->query->getInt('page', 1),
    1
  );

  return $this->render('OpenSourceFeedBundle:Post:index.html.twig', array('pagination' => $pagination));
}
/**
* Creates a new Post entity.
*
* @Route("/", name="post_create")
* @Method("POST")
* @Template("OpenSourceFeedBundle:Post:new.html.twig")
*/
public function createAction(Request $request)
{
  $entity = new Post();
  $form = $this->createCreateForm($entity);
  $form->handleRequest($request);

  if ($form->isValid()) {
    $em = $this->getDoctrine()->getManager();
    $em->persist($entity);
    $em->flush();

    return $this->redirect($this->generateUrl('post_show', array(
      'id' => $entity->getId(),
      'slug' => $entity->getSlug()
    )));
  }

  return array(
    'entity' => $entity,
    'form'   => $form->createView(),
  );
}

/**
* Creates a form to create a Post entity.
*
* @param Post $entity The entity
*
* @return \Symfony\Component\Form\Form The form
*/
private function createCreateForm(Post $entity)
{
  $form = $this->createForm(new PostType(), $entity, array(
    'action' => $this->generateUrl('post_create'),
    'method' => 'POST',
  ));

  $form->add('submit', 'submit', array('label' => 'Create'));

  return $form;
}

/**
* Displays a form to create a new Post entity.
*
* @Route("/new", name="post_new")
* @Method("GET")
* @Template()
*/
public function newAction()
{
  $entity = new Post();
  $form   = $this->createCreateForm($entity);

  return array(
    'entity' => $entity,
    'form'   => $form->createView(),
  );
}

/**
* Finds and displays a Post entity.
*
* @Route("/view/{id}/{slug}", name="post_show")
* @Method("GET")
* @Template()
*/
public function showAction($id, $slug)
{



  $em = $this->getDoctrine()->getManager();

  $entity = $em->getRepository('OpenSourceFeedBundle:Post')->find($id);

  if (!$entity) {
    throw $this->createNotFoundException('Unable to find Post entity.');
  }

  $deleteForm = $this->createDeleteForm($id);
  $comment = new Comment();
  $comment -> setPost($entity);
  $commentForm = $this -> createCommentForm($comment);
  return array(
    'entity'      => $entity,
    'delete_form' => $deleteForm->createView(),
    'comment_form' => $commentForm->createView()
  );
}

/**
* Displays a form to edit an existing Post entity.
*
* @Route("/edit/{id}", name="post_edit")
* @Method("GET")
* @Template()
*/
public function editAction($id)
{
  $em = $this->getDoctrine()->getManager();

  $entity = $em->getRepository('OpenSourceFeedBundle:Post')->find($id);

  if (!$entity) {
    throw $this->createNotFoundException('Unable to find Post entity.');
  }

  $editForm = $this->createEditForm($entity);
  $deleteForm = $this->createDeleteForm($id);

  return array(
    'entity'      => $entity,
    'edit_form'   => $editForm->createView(),
    'delete_form' => $deleteForm->createView(),
  );
}

/**
* Creates a form to edit a Post entity.
*
* @param Post $entity The entity
*
* @return \Symfony\Component\Form\Form The form
*/
private function createEditForm(Post $entity)
{
  $form = $this->createForm(new PostType(), $entity, array(
    'action' => $this->generateUrl('post_update', array('id' => $entity->getId())),
    'method' => 'PUT',
  ));

  $form->add('submit', 'submit', array('label' => 'Update'));

  return $form;
}
/**
* Edits an existing Post entity.
*
* @Route("/{id}", name="post_update")
* @Method("PUT")
* @Template("OpenSourceFeedBundle:Post:edit.html.twig")
*/
public function updateAction(Request $request, $id)
{
  $em = $this->getDoctrine()->getManager();

  $entity = $em->getRepository('OpenSourceFeedBundle:Post')->find($id);

  if (!$entity) {
    throw $this->createNotFoundException('Unable to find Post entity.');
  }

  $deleteForm = $this->createDeleteForm($id);
  $editForm = $this->createEditForm($entity);
  $editForm->handleRequest($request);

  if ($editForm->isValid()) {
    $em->flush();

    return $this->redirect($this->generateUrl('post_show', array('id' => $id, 'slug' => $entity->getSlug())));
  }

  return array(
    'entity'      => $entity,
    'edit_form'   => $editForm->createView(),
    'delete_form' => $deleteForm->createView(),
  );
}
/**
* Deletes a Post entity.
*
* @Route("/{id}", name="post_delete")
* @Method("DELETE")
*/
public function deleteAction(Request $request, $id)
{
  $form = $this->createDeleteForm($id);
  $form->handleRequest($request);

  if ($form->isValid()) {
    $em = $this->getDoctrine()->getManager();
    $entity = $em->getRepository('OpenSourceFeedBundle:Post')->find($id);

    if (!$entity) {
      throw $this->createNotFoundException('Unable to find Post entity.');
    }

    $em->remove($entity);
    $em->flush();
  }

  return $this->redirect($this->generateUrl('post'));
}

/**
* Creates a form to delete a Post entity by id.
*
* @param mixed $id The entity id
*
* @return \Symfony\Component\Form\Form The form
*/
private function createDeleteForm($id)
{
  return $this->createFormBuilder()
  ->setAction($this->generateUrl('post_delete', array('id' => $id)))
  ->setMethod('DELETE')
  ->add('submit', 'submit', array('label' => 'Delete'))
  ->getForm()
  ;
}

/**
* Creates a form to create a Comment entity.
*
* @param Comment $entity The entity
*
* @return \Symfony\Component\Form\Form The form
*/
private function createCommentForm(Comment $entity)
{
  $form = $this->createForm(new CommentType(), $entity, array(
    'action' => $this->generateUrl('comment_create'),
    'method' => 'POST',
  ));

  $form->add('submit', 'submit', array('label' => 'Create'));

  return $form;
}
}

<?php

namespace OpenSource\FeedBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use OpenSource\FeedBundle\Entity\Subcategory;
use OpenSource\FeedBundle\Form\SubcategoryType;
use Doctrine\DBAL\DBALException;

/**
* Subcategory controller.
*
* @Route("/software/{category}")
*/
class SubcategoryController extends Controller
{

  /**
  * Lists all Subcategory entities.
  *
  * @Route("/", name="subcategory")
  * @Method("GET")
  * @Template()
  */
  public function indexAction($category)
  {
    $em = $this->getDoctrine()->getManager();

    $category = $em -> getRepository('OpenSourceFeedBundle:Category')
    -> findOneBy(array(
      "name" => $category
    ));

    $entities = $em->getRepository('OpenSourceFeedBundle:Subcategory')
    ->findBy(array(
      'category' => $category
    ));

    return array(
      'entities' => $entities,
      'title' => $category
    );
  }
  /**
  * Creates a new Subcategory entity.
  *
  * @Route("/", name="subcategory_create")
  * @Method("POST")
  * @Template("OpenSourceFeedBundle:Subcategory:new.html.twig")
  */
  public function createAction(Request $request, $category)
  {
    $entity = new Subcategory();

    $em = $this->getDoctrine()->getManager();

    $category = $em->getRepository('OpenSourceFeedBundle:Category')->findOneBy(array('name' => $category));

    if (!$category) {
      throw $this->createNotFoundException('Unable to find Category entity.');
    }

    $entity -> setCategory($category);

    $form = $this->createCreateForm($entity);
    $form->handleRequest($request);

    if ($form->isValid()) {
      try {
        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();
      }
      catch(DBALException $e )
      {
        if( $e->getPrevious() ->getCode() === '23000' )
        {
          $error_message = "Subcategory Already Exists!!";
          return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'error_message' => $error_message,
            'title' => 'Add Subcategory'
          );
        }

        else throw $e;
      }

      return $this->redirect($this->generateUrl('subcategory_show', array('category' => $category, 'name' => $entity->getName())));
    }

    return array(
      'entity' => $entity,
      'form'   => $form->createView(),
    );
  }

  /**
  * Creates a form to create a Subcategory entity.
  *
  * @param Subcategory $entity The entity
  *
  * @return \Symfony\Component\Form\Form The form
  */
  private function createCreateForm(Subcategory $entity)
  {


    $form = $this->createForm(new SubcategoryType(), $entity, array(
      'action' => $this->generateUrl('subcategory_create', array('category' => $entity -> getCategory() -> getName())),
      'method' => 'POST',
    ));

    $form->add('submit', 'submit', array('label' => 'Create'));

    return $form;
  }

  /**
  * Displays a form to create a new Subcategory entity.
  *
  * @Route("/new", name="subcategory_new")
  * @Method("GET")
  * @Template()
  */
  public function newAction($category)
  {
    $entity = new Subcategory();

    $em = $this->getDoctrine()->getManager();

    $category = $em->getRepository('OpenSourceFeedBundle:Category')->findOneBy(array('name' => $category));

    if (!$category) {
      throw $this->createNotFoundException('Unable to find Category entity.');
    }

    $entity -> setCategory($category);

    $form   = $this->createCreateForm($entity);

    return array(
      'entity' => $entity,
      'form'   => $form->createView(),
      'title' => "Add Subcategory"
    );
  }

  /**
  * Finds and displays a Subcategory entity.
  *
  * @Route("/{name}", name="subcategory_show")
  * @Method("GET")
  * @Template()
  */
  public function showAction($category, $name)
  {
    $em = $this->getDoctrine()->getManager();

    $entity = $em->getRepository('OpenSourceFeedBundle:Subcategory')->findOneBy(array('name' => $name));

    if (!$entity) {
      throw $this->createNotFoundException('Unable to find Subcategory entity.');
    }

    $deleteForm = $this->createDeleteForm($category, $name);

    return array(
      'entity'      => $entity,
      'delete_form' => $deleteForm->createView(),
      'title' => $entity -> getName()
    );
  }

  /**
  * Displays a form to edit an existing Subcategory entity.
  *
  * @Route("/{name}/edit", name="subcategory_edit")
  * @Method("GET")
  * @Template()
  */
  public function editAction($category, $name)
  {
    $em = $this->getDoctrine()->getManager();

    $entity = $em->getRepository('OpenSourceFeedBundle:Subcategory')->findOneBy(array('name', $name));

    if (!$entity) {
      throw $this->createNotFoundException('Unable to find Subcategory entity.');
    }

    $editForm = $this->createEditForm($entity);
    $deleteForm = $this->createDeleteForm($name);

    return array(
      'entity'      => $entity,
      'edit_form'   => $editForm->createView(),
      'delete_form' => $deleteForm->createView(),
      'title' => 'Edit '.$entity -> getName()
    );
  }

  /**
  * Creates a form to edit a Subcategory entity.
  *
  * @param Subcategory $entity The entity
  *
  * @return \Symfony\Component\Form\Form The form
  */
  private function createEditForm(Subcategory $entity)
  {
    $form = $this->createForm(new SubcategoryType(), $entity, array(
      'action' => $this->generateUrl('subcategory_update', array('id' => $entity->getId())),
      'method' => 'PUT',
    ));

    $form->add('submit', 'submit', array('label' => 'Update'));

    return $form;
  }
  /**
  * Edits an existing Subcategory entity.
  *
  * @Route("/{id}", name="subcategory_update")
  * @Method("PUT")
  * @Template("OpenSourceFeedBundle:Subcategory:edit.html.twig")
  */
  public function updateAction(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();

    $entity = $em->getRepository('OpenSourceFeedBundle:Subcategory')->find($id);

    if (!$entity) {
      throw $this->createNotFoundException('Unable to find Subcategory entity.');
    }

    $deleteForm = $this->createDeleteForm($id);
    $editForm = $this->createEditForm($entity);
    $editForm->handleRequest($request);

    if ($editForm->isValid()) {
      $em->flush();

      return $this->redirect($this->generateUrl('subcategory_edit', array('id' => $id)));
    }

    return array(
      'entity'      => $entity,
      'edit_form'   => $editForm->createView(),
      'delete_form' => $deleteForm->createView(),

    );
  }
  /**
  * Deletes a Subcategory entity.
  *
  * @Route("/{name}", name="subcategory_delete")
  * @Method("DELETE")
  */
  public function deleteAction(Request $request, $name)
  {
    $form = $this->createDeleteForm($id);
    $form->handleRequest($request);

    if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $entity = $em->getRepository('OpenSourceFeedBundle:Subcategory')->findOneBy(array('name' => $name));

      if (!$entity) {
        throw $this->createNotFoundException('Unable to find Subcategory entity.');
      }

      $em->remove($entity);
      $em->flush();
    }

    return $this->redirect($this->generateUrl('subcategory'));
  }

  /**
  * Creates a form to delete a Subcategory entity by id.
  *
  * @param mixed $id The entity id
  *
  * @return \Symfony\Component\Form\Form The form
  */
  private function createDeleteForm($category, $name)
  {
    return $this->createFormBuilder()
    ->setAction($this->generateUrl('subcategory_delete', array('category' => $category, 'name' => $name)))
    ->setMethod('DELETE')
    ->add('submit', 'submit', array('label' => 'Delete'))
    ->getForm()
    ;
  }
}

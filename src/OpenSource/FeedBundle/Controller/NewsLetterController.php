<?php

namespace OpenSource\FeedBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use OpenSource\FeedBundle\Entity\NewsLetter;
use OpenSource\FeedBundle\Form\NewsLetterType;

/**
 * NewsLetter controller.
 *
 * @Route("/newsletter")
 */
class NewsLetterController extends Controller
{

    /**
     * Lists all NewsLetter entities.
     *
     * @Route("/", name="newsletter")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OpenSourceFeedBundle:NewsLetter')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new NewsLetter entity.
     *
     * @Route("/", name="newsletter_create")
     * @Method("POST")
     * @Template("OpenSourceFeedBundle:NewsLetter:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new NewsLetter();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('newsletter_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a NewsLetter entity.
     *
     * @param NewsLetter $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(NewsLetter $entity)
    {
        $form = $this->createForm(new NewsLetterType(), $entity, array(
            'action' => $this->generateUrl('newsletter_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new NewsLetter entity.
     *
     * @Route("/new", name="newsletter_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new NewsLetter();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a NewsLetter entity.
     *
     * @Route("/{id}", name="newsletter_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OpenSourceFeedBundle:NewsLetter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NewsLetter entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing NewsLetter entity.
     *
     * @Route("/{id}/edit", name="newsletter_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OpenSourceFeedBundle:NewsLetter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NewsLetter entity.');
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
    * Creates a form to edit a NewsLetter entity.
    *
    * @param NewsLetter $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(NewsLetter $entity)
    {
        $form = $this->createForm(new NewsLetterType(), $entity, array(
            'action' => $this->generateUrl('newsletter_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing NewsLetter entity.
     *
     * @Route("/{id}", name="newsletter_update")
     * @Method("PUT")
     * @Template("OpenSourceFeedBundle:NewsLetter:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OpenSourceFeedBundle:NewsLetter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NewsLetter entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('newsletter_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a NewsLetter entity.
     *
     * @Route("/{id}", name="newsletter_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OpenSourceFeedBundle:NewsLetter')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find NewsLetter entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('newsletter'));
    }

    /**
     * Creates a form to delete a NewsLetter entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('newsletter_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

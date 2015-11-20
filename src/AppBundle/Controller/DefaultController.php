<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
  /**
  * @Route("/", name="homepage")
  */
  public function indexAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $dql   = "SELECT a FROM OpenSourceFeedBundle:Post a";
    $query = $em->createQuery($dql);

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate($query,
    $request->query->getInt('page', 1),
    4
  );

  return $this->render('OpenSourceFeedBundle:Default:index.html.twig', array('pagination' => $pagination));
}
}

<?php

namespace Celmedia\EncuestaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
    	$em = $this->getDoctrine()->getManager();

        $encuesta =$this->getDoctrine()->getRepository('CelmediaEncuestaBundle:Pregunta')->findBy(array("estado"=>1));

        
        return $this->render('CelmediaSiteBundle:Block:pregunta.html.twig', array('encuesta' => $encuesta ));
    }

   
}

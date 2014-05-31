<?php

namespace Celmedia\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class DefaultController extends Controller
{
    
    
    public function videoAction()
    {
   
        
        return $this->render('CelmediaSiteBundle:Default:video.html.twig');
    }

    
    
    public function restartAction()
    {
        $session  = $this->get("session");        
        $session->set("indice_pregunta" ,  "0" );
        
        $em       = $this->getDoctrine()->getManager();
        $estados = $em->getRepository('CelmediaEncuestaBundle:Estado')->findAll();
        foreach(  $estados as $estado ){
            $em->remove($estado); 
        }
        $em->flush(); 

        return $this->render('CelmediaSiteBundle:Default:dummy.html.twig');
    }

    public function indexAction()
    {
        $em       = $this->getDoctrine()->getManager();
        $encuesta = $em->getRepository('CelmediaEncuestaBundle:Pregunta')->findBy(array("estado"=>1));

        return $this->render('CelmediaSiteBundle:Block:pregunta.html.twig', array('encuesta' => $encuesta ));
    }

    
    public function getEstadoAction()
    {
        
      $em = $this->getDoctrine()->getManager(); 
      $estado = $em->getRepository("CelmediaEncuestaBundle:Estado")->findOneBy(array('modo' => 'desktop')); 
      
      if( !$estado ){
          
          /// no exise ningun estado el juego esta empezando
          $estado = new \Celmedia\EncuestaBundle\Entity\Estado(); 
          $estado->setAccion("espera"); 
          $estado->setModo("desktop");
          $estado->setListo("no");
          $estado->setPuntaje(0);
          $em->persist($estado);
          $em->flush(); 
          
      }
      
      $response = array( "puntaje" => $estado->getPuntaje() ,   "accion" => $estado->getAccion(),"modo" => $estado->getModo()  ,   "success" => true);
    
      return new Response(json_encode($response));
    }
    
    
    
    
    
    public function setEstadoAction(   $modo  , $accion )
    {
        
      $em = $this->getDoctrine()->getManager(); 
      
      
      $estado = new \Celmedia\EncuestaBundle\Entity\Estado(); 
      
      if(  $modo == "mobile" ){
        $estado = $em->getRepository("CelmediaEncuestaBundle:Estado")->findOneBy(array('modo' => 'desktop'));
        $estado->setAccion(  $accion ); 
        $estado->setPuntaje(  0); 
        $em->flush(); 
        
      }
      
      $response = array("accion" => $estado->getAccion(),"modo" => $estado->getModo()  ,   "success" => true);
    
      return new Response(json_encode($response));
    }
    
    
    public function getEstadoMobileAction()
    {
        
      $response = array("code" => 1, "success" => true);
    
      return new Response(json_encode($response));
    }
    
    

   
    
    
     public function encuestaAction(Request $request){

      $pregunta = $request->request->get('encuesta');
      $respuesta = $request->request->get('opcion');
     
      $em = $this->getDoctrine()->getManager();
      $resultado = $em->getRepository('CelmediaEncuestaBundle:Respuesta')->findOneBy(array( "pregunta"=> $pregunta,  "id" => $respuesta ));

      $response = array("code" => $resultado->getValor() , "success" => true);
    
      return new Response(json_encode($response));

    }

    public function homeAction() {
        return $this->render('CelmediaSiteBundle:Default:home.html.twig');
    }


    public function mobileAction() {
             return $this->render('CelmediaSiteBundle:Default:mobile.html.twig');
    }
    
    
    
    public function  listernerDesktopAction(){
        
    }
    
    
    public function  listernerMobileAction(){
        
    }
    
    

    
}

<?php

namespace Celmedia\EncuestaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TriviaAdmin extends Admin
{
    


    public  function preUpdate( $obj ){


        foreach ($obj->getPreguntas() as $pregunta ){

            $pregunta->setTrivia( $obj );
        }  
    }

    public  function prePersist( $obj ){


        foreach ($obj->getPreguntas() as $pregunta ){
            $pregunta->setTrivia( $obj );
        }  
    }


    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('nombre')
            ->add('autor')
            ->add('estado')
            ->add('created')
            ->add('updated')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nombre')
            ->add('autor')
            ->add('estado', 'choice', array(
           'choices' => array(
               '1' => 'Publicado',
               '0' => 'No publicado'
               )))
            ->add('created')
            ->add('updated')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nombre')
            ->add('autor', 'choice', array(
           'choices' => array(
               'Magallanes' => 'Arturo Magallanes',
               'Galvez' => 'Carlos Galvez',
               'Alvarado' => 'Krsity Alvarado',
               'Cornejo' =>'Patricio Cornejo',
               'Crespo' => 'Jose Carlos Crespo',
               'Espana'=>'Gerardo España',
               'Arevalo'=>'José Luis Arevalo'
               )))
            ->with('Preguntas')
                ->add('preguntas', 'sonata_type_collection', array(
                     'by_reference' => false,
                           // Prevents the "Delete" option from being displayed
                     'type_options' => array('delete' => true)) , array(
                     'edit' => 'inline',
                     'inline' => 'table',
                     'sortable' => 'position',
                 ))
            ->end()
            ->add('estado', 'choice', array(
           'choices' => array(
               '1' => 'Publicado',
               '0' => 'No publicado'
               )))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('nombre')
            ->add('autor')
            ->add('estado')
            ->add('created')
            ->add('updated')
        ;
    }
}

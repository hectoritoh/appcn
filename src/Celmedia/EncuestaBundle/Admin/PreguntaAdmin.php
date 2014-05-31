<?php

namespace Celmedia\EncuestaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PreguntaAdmin extends Admin
{



    public  function preUpdate( $obj ){


        foreach ($obj->getRespuestas() as $respuesta ){

            $respuesta->setPregunta( $obj );
        }  
    }

    public  function prePersist( $obj ){


        foreach ($obj->getRespuestas() as $respuesta ){
            $respuesta->setPregunta( $obj );
        }  
    }



    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('pregunta')
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
            ->add('pregunta')
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
            ->add('pregunta')
            // ->with('Respuestas')
            //     ->add('respuestas', 'sonata_type_collection', array(
            //             'required' => false,
            //             'cascade_validation' => true,
            //         ), array(
            //             'edit' => 'inline',
            //             'inline' => 'table',
            //             'sortable'  => 'position',
            //             'allow_delete' => true,
            //         ))
            // ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('pregunta')
            ->add('created')
            ->add('updated')
        ;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 02/04/14
 * Time: 17:27
 */

// src/Rc/teamateBundle/Admin/GameAdmin.php

namespace Rc\teamateBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Rc\TeamateBundle\Entity\Game;

class GameAdmin extends Admin
{
    // setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'date'
    );

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('terrain')
            ->add('date')
            ->add('starts_at')
            ->add('ends_at')
            ->add('limitDate', 'datetime')
            ->add('is_activated')
            ->add('format', 'choice', array(
                'choices' => Game::getFormats(),
                'expanded' => true
            ))
            ->add('price')
            ->add('reservationMode')
            ->add('pitchType')
            ->add('level')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('terrain')
            ->add('date')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('terrain')
            ->add('date')
            ->add('starts_at')
            ->add('ends_at')
            ->add('limitDate')
            ->add('is_activated')
            ->add('format')
            ->add('reservationMode')
            ->add('pitchType')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('terrain')
            ->add('date')
            ->add('starts_at')
            ->add('ends_at')
            ->add('limitDate', 'DateTime')
            ->add('is_activated')
            ->add('format')
            ->add('price')
            ->add('reservationMode')
            ->add('pitchType')
            ->add('level')
            ->add('created_at')
            ->add('update_at')
        ;
    }
}
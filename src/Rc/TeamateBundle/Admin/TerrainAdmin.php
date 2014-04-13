<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 02/04/14
 * Time: 17:27
 */

// src/Rc/teamateBundle/Admin/TerrainAdmin.php

namespace Rc\teamateBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TerrainAdmin extends Admin
{
    // setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'id'
    );

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('city')
            ->add('email')
            ->add('ManagerName', 'text', array(
                'required' => false
            ))
            ->add('website')
            ->add('phone')
            ->add('address')
            ->add('latitude')
            ->add('longitude')
            ->add('priceScale')
            ->add('casiers', 'choice', array(
                'choices' => array(false => 'non', true => 'oui'),
                'expanded' => false,
                'required' => false
            ))
            ->add('showers', 'choice', array(
                'choices' => array(false => 'non', true => 'oui'),
                'expanded' => false,
                'required' => false
            ))
            ->add('parking', 'choice', array(
                'choices' => array(false => 'non', true => 'oui'),
                'expanded' => false,
                'required' => false
            ))
            ->add('restaurant', 'choice', array(
                'choices' => array(false => 'non', true => 'oui'),
                'expanded' => false,
                'required' => false
            ))
            ->add('bar', 'choice', array(
                'choices' => array(false => 'non', true => 'oui'),
                'expanded' => false,
                'required' => false
            ))
            ->add('vestiaires', 'choice', array(
                'choices' => array(false => 'non', true => 'oui'),
                'expanded' => false,
                'required' => false
            ))
            ->add('nbPitches')
            ->add('postcode')
            ->add('region')
            ->add('country')
            ->add('is_activated')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('city')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name')
            ->add('city')
            ->add('ManagerName')
            ->add('email')
            ->add('phone')
            ->add('nbPitches')
            ->add('is_activated')
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
            ->add('name')
            ->add('city')
            ->add('email')
            ->add('ManagerName')
            ->add('website')
            ->add('phone')
            ->add('is_activated')
            ->add('created_at')
            ->add('updated_at')
            ->add('address')
            ->add('latitude')
            ->add('longitude')
            ->add('priceScale')
            ->add('casiers')
            ->add('showers')
            ->add('parking')
            ->add('restaurant')
            ->add('bar')
            ->add('vestiaires')
            ->add('nbPitches')
            ->add('postcode')
            ->add('region')
            ->add('country')
        ;
    }
}
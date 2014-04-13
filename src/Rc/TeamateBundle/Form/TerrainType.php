<?php

namespace Rc\TeamateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TerrainType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('city')
            ->add('postcode')
            ->add('region')
            ->add('country')
            ->add('email', 'email',array(
                'required' => false
            ))
            ->add('managerName', 'text', array(
                'required' => false
            ))
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
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rc\TeamateBundle\Entity\Terrain'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rc_teamatebundle_terrain';
    }
}

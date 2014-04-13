<?php

namespace Rc\TeamateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Rc\TeamateBundle\Entity\Game;

class GameType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('starts_at')
            ->add('ends_at')
            ->add('limitDate')
            ->add('is_activated')
            ->add('created_at')
            ->add('updated_at')
            ->add('format', 'choice', array(
                'choices' => Game::getFormats(),
                'expanded' => false
            ))
            ->add('price')
            ->add('reservationMode', 'choice', array(
                'choices' => Game::getReservationModes(),
                'expanded' => true
            ))
            ->add('pitchType', 'choice', array(
                'choices' => Game::getPitchTypes(),
                'expanded' => false
            ))
            ->add('level', 'choice', array(
                'choices' => Game::getLevels(),
                'expanded' => false
            ))
            ->add('terrain')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rc\TeamateBundle\Entity\Game'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rc_teamatebundle_game';
    }
}

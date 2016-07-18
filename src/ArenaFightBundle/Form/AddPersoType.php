<?php

namespace ArenaFightBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AddPersoType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom', TextType::class, array(
                    'attr' => array('class' => 'form-control')
                ))
                ->add('race', EntityType::class, array(
                    'class' => 'ArenaFightBundle:Race',
                    'choice_label' => function ($race) {
                        return $race->getNom();
                    },
                    'attr' => array('class' => 'form-control')))
                ->add('submit', SubmitType::class, array(
                    'label' => 'Créer',
                    'attr' => array('class' => 'btn btn-primary')
        ));
    }

}

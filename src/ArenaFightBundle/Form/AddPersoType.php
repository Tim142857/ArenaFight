<?php

namespace ArenaFightBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
                ->add('fichierImage', ChoiceType::class, array(
                    'attr' => array('class' => 'form-control'),
                    'choices' => array(
                        'Homer' => 'homer.jpg',
                        'Elfe' => 'elfe.jpg',
                        'Humain' => 'humain.jpg',
                        'Mario' => 'mario.jpg',
                        'Nain' => 'nain.jpg',
                        'Troll' => 'troll.jpg'
            )))
                ->add('submit', SubmitType::class, array(
                    'label' => 'Créer',
                    'attr' => array('class' => 'btn btn-primary')
        ));
    }

}

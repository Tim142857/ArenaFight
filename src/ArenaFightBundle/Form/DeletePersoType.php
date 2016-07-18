<?php

namespace ArenaFightBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use ArenaFightBundle\Entity\Joueur;

class DeletePersoType extends AbstractType {

    protected $joueur;

    public function __construct(Joueur $joueur) {
        $this->joueur = $joueur;
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder
                ->add('personnage', 'entity', array(
                    'class' => 'ArenaFightBundle:Personnage',
                    'query_builder' => function(EntityRepository $er) use ($joueur) {
                        return $er->createQueryBuilder('p')
                                ->where("p.joueur = :joueur")
                                ->setParameter('joueur', $joueur)
                        ;
                    },
                ))
                ->add('submit', SubmitType::class, array(
                    'label' => 'Supprimer',
                    'attr' => array('class' => 'btn btn-primary')));
    }

}

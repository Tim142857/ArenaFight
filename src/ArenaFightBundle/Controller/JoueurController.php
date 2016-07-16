<?php

namespace ArenaFightBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ArenaFightBundle\Form\AddPersoType;
use ArenaFightBundle\Entity\Personnage;
use ArenaFightBundle\Entity\Race;

class JoueurController extends Controller {

    public function indexAction() {

        $auth_checker = $this->get('security.authorization_checker');
        $token = $this->get('security.token_storage')->getToken();
        $user = $token->getUser();

        if ($user == 'anon.') {
            return $this->render('ArenaFightBundle:Visitor:AccueilVisitor.html.twig', array('title' => 'Accueil'));
        } else {
            return $this->render('ArenaFightBundle:Joueur:Accueil.html.twig', array('title' => 'Accueil'));
        }
    }

    public function indexQuetesAction() {

        $em = $this->getDoctrine()->getManager();
        $repoQuetes = $em->getRepository('ArenaFightBundle:Quete');
        $quetes = $repoQuetes->findAll();
        dump($quetes);

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $repoPersos = $em->getRepository('ArenaFightBundle:Personnage');
        $persos = $repoPersos->findBy(array('joueur' => $user, 'etat' => 'vivant'));

        return $this->render('ArenaFightBundle:Joueur:Quetes.html.twig', array('quetes' => $quetes, 'persos' => $persos));
    }

    public function envoiQueteAction(Request $request) {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $idQuete = $request->get('idQuete');
        $idPerso = $request->get('idPerso');

        $em = $this->getDoctrine()->getManager();
        $repoPersos = $em->getRepository('ArenaFightBundle:Personnage');
        $perso = $repoPersos->findOneById($idPerso);
        $repoQuetes = $em->getRepository('ArenaFightBundle:Quete');
        $quete = $repoQuetes->findOneById($idQuete);

        $perso->setEtat('enQuete');
        $em->flush();

        $messageUtilisateur = "Le personnage est bien parti!";

        $quetes = $repoQuetes->findAll();
        $persos = $repoPersos->findBy(array('joueur' => $user, 'etat' => 'vivant'));
        return $this->render('ArenaFightBundle:Joueur:Quetes.html.twig', array('quetes' => $quetes, 'persos' => $persos, 'messageUtilisateur' => $messageUtilisateur));
    }

    public function accueilPersosAction() {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $repoPerso = $em->getRepository('ArenaFightBundle:Personnage');
        $persos = $repoPerso->findByJoueur($user);
        dump($persos);
        return $this->render('ArenaFightBundle:Joueur:Personnages_Accueil.html.twig', array('persos' => $persos));
    }

    public function ajouterPersoAction(Request $request) {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $perso = new Personnage();
        $form = $this->createForm(AddPersoType::class, $perso);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $perso->setLevel(1);
            $perso->setVieMax($perso->getRace()->getVieMax());
            $perso->setVie($perso->getVieMax());
            $perso->setExperience(0);
            $perso->setDefense($perso->getRace()->getDefense());
            $perso->setDefenseTotale($perso->getDefense());
            $perso->setAttaque($perso->getRace()->getAttaque());
            $perso->setAttaqueTotale($perso->getAttaque());
            $perso->setVitesse($perso->getRace()->getVitesse());
            $perso->setVitesseTotale($perso->getVitesse());
            $perso->setVitesseAttaque($perso->getRace()->getVitesseAttaque());
            $perso->setVitesseAttaqueTotale($perso->getVitesseAttaque());
            $perso->setEsquive($perso->getRace()->getEsquive());
            $perso->setEsquiveTotale($perso->getEsquive());
            $perso->setDegatsCritique($perso->getRace()->getDegatsCritique());
            $perso->setDegatsCritiqueTotal($perso->getDegatsCritique());
            $perso->setChanceCritique($perso->getRace()->getChanceCritique());
            $perso->setChanceCritiqueTotale($perso->getChanceCritique());
            $perso->setEtat('vivant');
            $perso->setJoueur($user);
            $perso->setDebutEtat(new \DateTime());
            $perso->setFinEtat(new \DateTime());
            $em->persist($perso);
            $em->flush();

            dump($perso);
            return $this->redirectToRoute('joueur_accueil_persos');
        }

        return $this->render('ArenaFightBundle:Joueur:Personnages_Ajouter.html.twig', array('form' => $form->createView()));
    }

}

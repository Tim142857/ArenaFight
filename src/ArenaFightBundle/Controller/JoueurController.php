<?php

namespace ArenaFightBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ArenaFightBundle\Form\AddPersoType;
use ArenaFightBundle\Form\DeletePersoType;
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

    public function profilAction() {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        return $this->render('ArenaFightBundle:Joueur:Joueur_Profil.html.twig', array('joueur' => $user));
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

    public function vueSupprimerPersoAction() {

        $em = $this->getDoctrine()->getManager();
        $repoPerso = $em->getRepository('ArenaFightBundle:Personnage');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $persos = $repoPerso->findByJoueur($user);

        return $this->render('ArenaFightBundle:Joueur:Personnages_Supprimer.html.twig', array('persos' => $persos));
    }

    public function supprimerPersoAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $repoPerso = $em->getRepository('ArenaFightBundle:Personnage');
        $idPerso = $request->get('idPerso');
        $persoASupprimer = $repoPerso->findOneById($idPerso);
        $em->remove($persoASupprimer);
        $em->flush();

        return $this->redirectToRoute('joueur_accueil_persos');
    }

    public function equiperPersoAction($persoActuel) {
        $em = $this->getDoctrine()->getManager();
        $repoItem = $em->getRepository('ArenaFightBundle:Item');
        $itemAEquiper = $repoItem->findOneById(1);
        var_dump($itemAEquiper);

        $repoPerso = $em->getRepository('ArenaFightBundle:Personnage');
        $perso = $repoPerso->findOneById(4);
        var_dump($perso);


        $perso->addItem($itemAEquiper);
        $em->persist($perso);
        $em->flush();

        return $this->redirectToRoute('joueur_accueil_persos');
    }

    public function desequiperPersoAction($persoActuel) {

        $em = $this->getDoctrine()->getManager();
        $repoItem = $em->getRepository('ArenaFightBundle:Item');
        $itemAEquiper = $repoItem->findOneById(1);
        var_dump($itemAEquiper);

        $repoPerso = $em->getRepository('ArenaFightBundle:Personnage');
        $perso = $repoPerso->findOneById(4);
        var_dump($perso);


        $perso->removeItem($itemAEquiper);
        $em->persist($perso);
        $em->flush();

        return $this->redirectToRoute('joueur_accueil_persos');
    }

    public function gainExp($persoActuel) {
        
    }

    public function levelUp($persoActuel) {
        
    }

    public function attaquer(Personnage $persoAttaque) {
        
    }

    public function ultime(Personnage $persoAttaque = null) {
        
    }

    public function acheterItem($idItemAchete) {
        $em = $this->getDoctrine()->getManager();
        $repoItem = $em->getRepository('ArenaFightBundle:Item');
        $itemAchete = $repoItem->findOneById($idItemAchete);

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $messageUser = "";
        $argentActuel = $user->getArgent();
        if ($argentActuel >= $itemAchete->getPrix()) {
            $user->setArgent($argentActuel - $itemAchete->getPrix());
            $user->addItem($itemAchete);
            $em->persist($user);
            $em->flush();
            $messageUser = "item acheté";
        } else if ($argentActuel < $itemAchete->getPrix()) {
            $messageUser = "Vous n'avez pas assez d'argent";
        } else {
            $messageUser = "Il y a eu un problème pendant la vente, veuillez réessayer plus tard";
        }
    }

    public function vendreItem($idItemAVendre) {
        $em = $this->getDoctrine()->getManager();
        $repoItem = $em->getRepository('ArenaFightBundle:Item');
        $itemAVendre = $repoItem->findOneById($itemAVendre);

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $messageUser = "";
        $argentActuel = $user->getArgent();
        try {
            $user->setArgent($argentActuel + $itemAchete->getPrix());
            $user->removeItem($itemAchete);
            $messageUser = "item vendu";
            $em->persist($user);
            $em->flush();
        } catch (Exception $ex) {
            
        }
    }

}

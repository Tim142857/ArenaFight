<?php

namespace ArenaFightBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnage
 *
 * @ORM\Table(name="personnage")
 * @ORM\Entity(repositoryClass="ArenaFightBundle\Repository\PersonnageRepository")
 */
class Personnage {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="experience", type="integer")
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="defense", type="string", length=255)
     */
    private $defense;

    /**
     * @var int
     *
     * @ORM\Column(name="defenseTotale", type="integer")
     */
    private $defenseTotale;

    /**
     * @var int
     *
     * @ORM\Column(name="attaque", type="integer")
     */
    private $attaque;

    /**
     * @var int
     *
     * @ORM\Column(name="attaqueTotale", type="integer")
     */
    private $attaqueTotale;

    /**
     * @var int
     *
     * @ORM\Column(name="vitesse", type="integer")
     */
    private $vitesse;

    /**
     * @var int
     *
     * @ORM\Column(name="vitesseAttaque", type="integer")
     */
    private $vitesseAttaque;

    /**
     * @var int
     *
     * @ORM\Column(name="esquive", type="integer")
     */
    private $esquive;

    /**
     * @var int
     *
     * @ORM\Column(name="degatsCritique", type="integer")
     */
    private $degatsCritique;

    /**
     * @var int
     *
     * @ORM\Column(name="chanceCritique", type="integer")
     */
    private $chanceCritique;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debutEtat", type="date")
     */
    private $debutEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finEtat", type="date")
     */
    private $finEtat;

    /**
     * @var \Race
     *
     * @ORM\ManyToOne(targetEntity="Race", inversedBy="personnages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="race", referencedColumnName="id")
     * })
     */
    private $race;

    /**
     * @var \Competence
     *
     * @ORM\ManyToOne(targetEntity="Competence", inversedBy="personnages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="competence", referencedColumnName="id")
     * })
     */
    private $competence;

    /**
     * @var \Joueur
     *
     * @ORM\ManyToOne(targetEntity="Joueur", inversedBy="personnages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="joueur", referencedColumnName="id")
     * })
     */
    private $joueur;

    /**
     * @ORM\ManyToMany(targetEntity="ArenaFightBundle\Entity\Item", cascade={"persist"})
     */
    private $items;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Personnage
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Personnage
     */
    public function setLevel($level) {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel() {
        return $this->level;
    }

    /**
     * Set experience
     *
     * @param integer $experience
     *
     * @return Personnage
     */
    public function setExperience($experience) {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return int
     */
    public function getExperience() {
        return $this->experience;
    }

    /**
     * Set defense
     *
     * @param string $defense
     *
     * @return Personnage
     */
    public function setDefense($defense) {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get defense
     *
     * @return string
     */
    public function getDefense() {
        return $this->defense;
    }

    /**
     * Set defenseTotale
     *
     * @param integer $defenseTotale
     *
     * @return Personnage
     */
    public function setDefenseTotale($defenseTotale) {
        $this->defenseTotale = $defenseTotale;

        return $this;
    }

    /**
     * Get defenseTotale
     *
     * @return int
     */
    public function getDefenseTotale() {
        return $this->defenseTotale;
    }

    /**
     * Set attaque
     *
     * @param integer $attaque
     *
     * @return Personnage
     */
    public function setAttaque($attaque) {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get attaque
     *
     * @return int
     */
    public function getAttaque() {
        return $this->attaque;
    }

    /**
     * Set attaqueTotale
     *
     * @param integer $attaqueTotale
     *
     * @return Personnage
     */
    public function setAttaqueTotale($attaqueTotale) {
        $this->attaqueTotale = $attaqueTotale;

        return $this;
    }

    /**
     * Get attaqueTotale
     *
     * @return int
     */
    public function getAttaqueTotale() {
        return $this->attaqueTotale;
    }

    /**
     * Set vitesse
     *
     * @param integer $vitesse
     *
     * @return Personnage
     */
    public function setVitesse($vitesse) {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get vitesse
     *
     * @return int
     */
    public function getVitesse() {
        return $this->vitesse;
    }

    /**
     * Set vitesseAttaque
     *
     * @param integer $vitesseAttaque
     *
     * @return Personnage
     */
    public function setVitesseAttaque($vitesseAttaque) {
        $this->vitesseAttaque = $vitesseAttaque;

        return $this;
    }

    /**
     * Get vitesseAttaque
     *
     * @return int
     */
    public function getVitesseAttaque() {
        return $this->vitesseAttaque;
    }

    /**
     * Set esquive
     *
     * @param integer $esquive
     *
     * @return Personnage
     */
    public function setEsquive($esquive) {
        $this->esquive = $esquive;

        return $this;
    }

    /**
     * Get esquive
     *
     * @return int
     */
    public function getEsquive() {
        return $this->esquive;
    }

    /**
     * Set degatsCritique
     *
     * @param integer $degatsCritique
     *
     * @return Personnage
     */
    public function setDegatsCritique($degatsCritique) {
        $this->degatsCritique = $degatsCritique;

        return $this;
    }

    /**
     * Get degatsCritique
     *
     * @return int
     */
    public function getDegatsCritique() {
        return $this->degatsCritique;
    }

    /**
     * Set chanceCritique
     *
     * @param integer $chanceCritique
     *
     * @return Personnage
     */
    public function setChanceCritique($chanceCritique) {
        $this->chanceCritique = $chanceCritique;

        return $this;
    }

    /**
     * Get chanceCritique
     *
     * @return int
     */
    public function getChanceCritique() {
        return $this->chanceCritique;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Personnage
     */
    public function setEtat($etat) {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Set debutEtat
     *
     * @param \DateTime $debutEtat
     *
     * @return Personnage
     */
    public function setDebutEtat($debutEtat) {
        $this->debutEtat = $debutEtat;

        return $this;
    }

    /**
     * Get debutEtat
     *
     * @return \DateTime
     */
    public function getDebutEtat() {
        return $this->debutEtat;
    }

    /**
     * Set finEtat
     *
     * @param \DateTime $finEtat
     *
     * @return Personnage
     */
    public function setFinEtat($finEtat) {
        $this->finEtat = $finEtat;

        return $this;
    }

    /**
     * Get finEtat
     *
     * @return \DateTime
     */
    public function getFinEtat() {
        return $this->finEtat;
    }

    /**
     * Set joueur
     *
     * @param \ArenaFightBundle\Entity\Joueur $joueur
     *
     * @return Personnage
     */
    public function setJoueur(\ArenaFightBundle\Entity\Joueur $joueur = null) {
        $this->joueur = $joueur;

        return $this;
    }

    /**
     * Get joueur
     *
     * @return \ArenaFightBundle\Entity\Joueur
     */
    public function getJoueur() {
        return $this->joueur;
    }


    /**
     * Get race
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRace() {
        return $this->race;
    }

    /**
     * Set race
     *
     * @param \ArenaFightBundle\Entity\Race $race
     *
     * @return Personnage
     */
    public function setRace(\ArenaFightBundle\Entity\Race $race = null) {
        $this->race = $race;

        return $this;
    }

    /**
     * Set competence
     *
     * @param \ArenaFightBundle\Entity\Competence $competence
     *
     * @return Personnage
     */
    public function setCompetence(\ArenaFightBundle\Entity\Competence $competence = null) {
        $this->competence = $competence;

        return $this;
    }

    /**
     * Get competence
     *
     * @return \ArenaFightBundle\Entity\Competence
     */
    public function getCompetence() {
        return $this->competence;
    }


    /**
     * Add item
     *
     * @param \ArenaFightBundle\Entity\Item $item
     *
     * @return Personnage
     */
    public function addItem(\ArenaFightBundle\Entity\Item $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \ArenaFightBundle\Entity\Item $item
     */
    public function removeItem(\ArenaFightBundle\Entity\Item $item)
    {
        $this->items->removeElement($item);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

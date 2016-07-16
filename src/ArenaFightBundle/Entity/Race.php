<?php

namespace ArenaFightBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Race
 *
 * @ORM\Table(name="race")
 * @ORM\Entity(repositoryClass="ArenaFightBundle\Repository\RaceRepository")
 */
class Race {

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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="defense", type="integer")
     */
    private $defense;

    /**
     * @var int
     *
     * @ORM\Column(name="attaque", type="integer")
     */
    private $attaque;

    /**
     * @var int
     *
     * @ORM\Column(name="vieMax", type="integer")
     */
    private $vieMax;

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
     * @ORM\OneToMany(targetEntity="ArenaFightBundle\Entity\Personnage", mappedBy="race", cascade={"remove", "persist"})
     */
    private $personnages;

    /**
     * Get id
     *
     * @return int
     */

    /**
     * @var \Competence
     *
     * @ORM\ManyToOne(targetEntity="Competence", inversedBy="races")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="competence", referencedColumnName="id")
     * })
     */
    private $competence;

    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Race
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
     * Set description
     *
     * @param string $description
     *
     * @return Race
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set defense
     *
     * @param integer $defense
     *
     * @return Race
     */
    public function setDefense($defense) {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get defense
     *
     * @return int
     */
    public function getDefense() {
        return $this->defense;
    }

    /**
     * Set attaque
     *
     * @param integer $attaque
     *
     * @return Race
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
     * Set vitesse
     *
     * @param integer $vitesse
     *
     * @return Race
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
     * @return Race
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
     * @return Race
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
     * @return Race
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
     * @return Race
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
     * Constructor
     */
    public function __construct() {
        $this->personnages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add personnage
     *
     * @param \ArenaFightBundle\Entity\Personnage $personnage
     *
     * @return Race
     */
    public function addPersonnage(\ArenaFightBundle\Entity\Personnage $personnage) {
        $this->personnages[] = $personnage;

        return $this;
    }

    /**
     * Remove personnage
     *
     * @param \ArenaFightBundle\Entity\Personnage $personnage
     */
    public function removePersonnage(\ArenaFightBundle\Entity\Personnage $personnage) {
        $this->personnages->removeElement($personnage);
    }

    /**
     * Get personnages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonnages() {
        return $this->personnages;
    }

    /**
     * Set vieMax
     *
     * @param integer $vieMax
     *
     * @return Race
     */
    public function setVieMax($vieMax) {
        $this->vieMax = $vieMax;

        return $this;
    }

    /**
     * Get vieMax
     *
     * @return integer
     */
    public function getVieMax() {
        return $this->vieMax;
    }


    /**
     * Set competence
     *
     * @param \ArenaFightBundle\Entity\Competence $competence
     *
     * @return Race
     */
    public function setCompetence(\ArenaFightBundle\Entity\Competence $competence = null)
    {
        $this->competence = $competence;

        return $this;
    }

    /**
     * Get competence
     *
     * @return \ArenaFightBundle\Entity\Competence
     */
    public function getCompetence()
    {
        return $this->competence;
    }
}

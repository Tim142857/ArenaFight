<?php

namespace ArenaFightBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table(name="competence")
 * @ORM\Entity(repositoryClass="ArenaFightBundle\Repository\CompetenceRepository")
 */
class Competence {

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
     * @ORM\OneToMany(targetEntity="ArenaFightBundle\Entity\Race", mappedBy="competence", cascade={"remove", "persist"})
     */
    private $races;

    /**
     * Constructor
     */
    public function __construct() {
        $this->races = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Competence
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
     * @return Competence
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
     * Add race
     *
     * @param \ArenaFightBundle\Entity\Race $race
     *
     * @return Competence
     */
    public function addRace(\ArenaFightBundle\Entity\Race $race) {
        $this->races[] = $race;

        return $this;
    }

    /**
     * Remove race
     *
     * @param \ArenaFightBundle\Entity\Race $race
     */
    public function removeRace(\ArenaFightBundle\Entity\Race $race) {
        $this->races->removeElement($race);
    }

    /**
     * Get races
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRaces() {
        return $this->races;
    }

}

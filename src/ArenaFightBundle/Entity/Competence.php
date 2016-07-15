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
     * @ORM\OneToMany(targetEntity="ArenaFightBundle\Entity\Personnage", mappedBy="competence", cascade={"remove", "persist"})
     */
    private $personnages;

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
     * Constructor
     */
    public function __construct()
    {
        $this->personnages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add personnage
     *
     * @param \ArenaFightBundle\Entity\Personnage $personnage
     *
     * @return Competence
     */
    public function addPersonnage(\ArenaFightBundle\Entity\Personnage $personnage)
    {
        $this->personnages[] = $personnage;

        return $this;
    }

    /**
     * Remove personnage
     *
     * @param \ArenaFightBundle\Entity\Personnage $personnage
     */
    public function removePersonnage(\ArenaFightBundle\Entity\Personnage $personnage)
    {
        $this->personnages->removeElement($personnage);
    }

    /**
     * Get personnages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonnages()
    {
        return $this->personnages;
    }
}

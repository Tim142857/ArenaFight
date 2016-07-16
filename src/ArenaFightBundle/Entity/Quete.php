<?php

namespace ArenaFightBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quete
 *
 * @ORM\Table(name="quete")
 * @ORM\Entity(repositoryClass="ArenaFightBundle\Repository\QueteRepository")
 */
class Quete {

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
     * @ORM\Column(name="argent", type="integer")
     */
    private $argent;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="string", length=255)
     */
    private $experience;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duree", type="time")
     */
    private $duree;
    
    /**
     * @ORM\OneToMany(targetEntity="ArenaFightBundle\Entity\LootItem", mappedBy="quete", cascade={"remove", "persist"})
     */
    private $lootitems;

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
     * @return Quete
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
     * @return Quete
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
     * Set argent
     *
     * @param integer $argent
     *
     * @return Quete
     */
    public function setArgent($argent) {
        $this->argent = $argent;

        return $this;
    }

    /**
     * Get argent
     *
     * @return int
     */
    public function getArgent() {
        return $this->argent;
    }

    /**
     * Set experience
     *
     * @param string $experience
     *
     * @return Quete
     */
    public function setExperience($experience) {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string
     */
    public function getExperience() {
        return $this->experience;
    }

    /**
     * Set duree
     *
     * @param \DateTime $duree
     *
     * @return Quete
     */
    public function setDuree($duree) {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return \DateTime
     */
    public function getDuree() {
        return $this->duree;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lootitems = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lootitem
     *
     * @param \ArenaFightBundle\Entity\LootItem $lootitem
     *
     * @return Quete
     */
    public function addLootitem(\ArenaFightBundle\Entity\LootItem $lootitem)
    {
        $this->lootitems[] = $lootitem;

        return $this;
    }

    /**
     * Remove lootitem
     *
     * @param \ArenaFightBundle\Entity\LootItem $lootitem
     */
    public function removeLootitem(\ArenaFightBundle\Entity\LootItem $lootitem)
    {
        $this->lootitems->removeElement($lootitem);
    }

    /**
     * Get lootitems
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLootitems()
    {
        return $this->lootitems;
    }
}

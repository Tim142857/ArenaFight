<?php

namespace ArenaFightBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item")
 * @ORM\Entity(repositoryClass="ArenaFightBundle\Repository\ItemRepository")
 */
class Item
{
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
     * @ORM\Column(name="degats", type="integer")
     */
    private $degats;

    /**
     * @var int
     *
     * @ORM\Column(name="reductionDegats", type="integer")
     */
    private $reductionDegats;

    /**
     * @var int
     *
     * @ORM\Column(name="vitesse", type="integer")
     */
    private $vitesse;

    /**
     * @var int
     *
     * @ORM\Column(name="regen", type="integer")
     */
    private $regen;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="levelMini", type="integer")
     */
    private $levelMini;
    
    /**
     * @var \TypeItem
     *
     * @ORM\ManyToOne(targetEntity="TypeItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeitem", referencedColumnName="id")
     * })
     */
    private $typeItem;
    


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Item
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Item
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set degats
     *
     * @param integer $degats
     *
     * @return Item
     */
    public function setDegats($degats)
    {
        $this->degats = $degats;

        return $this;
    }

    /**
     * Get degats
     *
     * @return int
     */
    public function getDegats()
    {
        return $this->degats;
    }

    /**
     * Set reductionDegats
     *
     * @param string $reductionDegats
     *
     * @return Item
     */
    public function setReductionDegats($reductionDegats)
    {
        $this->reductionDegats = $reductionDegats;

        return $this;
    }

    /**
     * Get reductionDegats
     *
     * @return string
     */
    public function getReductionDegats()
    {
        return $this->reductionDegats;
    }

    /**
     * Set vitesse
     *
     * @param integer $vitesse
     *
     * @return Item
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get vitesse
     *
     * @return int
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Set regen
     *
     * @param string $regen
     *
     * @return Item
     */
    public function setRegen($regen)
    {
        $this->regen = $regen;

        return $this;
    }

    /**
     * Get regen
     *
     * @return string
     */
    public function getRegen()
    {
        return $this->regen;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Item
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set levelMini
     *
     * @param integer $levelMini
     *
     * @return Item
     */
    public function setLevelMini($levelMini)
    {
        $this->levelMini = $levelMini;

        return $this;
    }

    /**
     * Get levelMini
     *
     * @return int
     */
    public function getLevelMini()
    {
        return $this->levelMini;
    }

    /**
     * Set typeItem
     *
     * @param \ArenaFightBundle\Entity\TypeItem $typeItem
     *
     * @return Item
     */
    public function setTypeItem(\ArenaFightBundle\Entity\TypeItem $typeItem = null)
    {
        $this->typeItem = $typeItem;

        return $this;
    }

    /**
     * Get typeItem
     *
     * @return \ArenaFightBundle\Entity\TypeItem
     */
    public function getTypeItem()
    {
        return $this->typeItem;
    }
}

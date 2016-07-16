<?php

namespace ArenaFightBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LootItem
 *
 * @ORM\Table(name="loot_item")
 * @ORM\Entity(repositoryClass="ArenaFightBundle\Repository\LootItemRepository")
 */
class LootItem {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="pourcentage", type="integer")
     */
    private $pourcentage;

    /**
     * @var \Item
     */
    private $item;

    /**
     * @var \Quete
     *
     * @ORM\ManyToOne(targetEntity="Quete", inversedBy="lootitems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quete", referencedColumnName="id")
     * })
     */
    private $quete;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set pourcentage
     *
     * @param integer $pourcentage
     *
     * @return LootItem
     */
    public function setPourcentage($pourcentage) {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    /**
     * Get pourcentage
     *
     * @return int
     */
    public function getPourcentage() {
        return $this->pourcentage;
    }

    /**
     * Set item
     *
     * @param \ArenaFightBundle\Entity\Item $item
     *
     * @return LootItem
     */
    public function setItem(\ArenaFightBundle\Entity\Item $item = null) {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return \ArenaFightBundle\Entity\Item
     */
    public function getItem() {
        return $this->item;
    }

    /**
     * Set quete
     *
     * @param \ArenaFightBundle\Entity\Quete $quete
     *
     * @return LootItem
     */
    public function setQuete(\ArenaFightBundle\Entity\Quete $quete = null) {
        $this->quete = $quete;

        return $this;
    }

    /**
     * Get quete
     *
     * @return \ArenaFightBundle\Entity\Quete
     */
    public function getQuete() {
        return $this->quete;
    }

}

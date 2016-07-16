<?php

namespace ArenaFightBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Joueur
 *
 * @ORM\Table(name="joueur")
 * @ORM\Entity(repositoryClass="ArenaFightBundle\Repository\JoueurRepository")
 */
class Joueur extends BaseUser {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="argent", type="integer")
     */
    private $argent;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @ORM\OneToMany(targetEntity="ArenaFightBundle\Entity\Personnage", mappedBy="joueur", cascade={"remove", "persist"})
     */
    private $personnages;

    /**
     * @ORM\ManyToMany(targetEntity="ArenaFightBundle\Entity\Item", inversedBy="joueurs", cascade={"remove", "persist"})
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
     * Set argent
     *
     * @param integer $argent
     *
     * @return Joueur
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
     * Set level
     *
     * @param integer $level
     *
     * @return Joueur
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
     * Add personnage
     *
     * @param \ArenaFightBundle\Entity\Personnage $personnage
     *
     * @return Joueur
     */
    public function addPersonnage(\ArenaFightBundle\Entity\Personnage $personnage) {
        $this->personnages[] = $personnage;
        $personnage->setJoueur($this);

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
     * Add item
     *
     * @param \ArenaFightBundle\Entity\Item $item
     *
     * @return Joueur
     */
    public function addItem(\ArenaFightBundle\Entity\Item $item) {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \ArenaFightBundle\Entity\Item $item
     */
    public function removeItem(\ArenaFightBundle\Entity\Item $item) {
        $this->items->removeElement($item);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems() {
        return $this->items;
    }

}

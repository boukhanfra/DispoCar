<?php

namespace DispoCar\ParcAutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Options
 *
 * @ORM\Table(name="options")
 * @ORM\Entity(repositoryClass="DispoCar\ParcAutoBundle\Repository\OptionsRepository")
 */
class Options
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
     * @var bool
     *
     * @ORM\Column(name="chauffeur", type="boolean", nullable=true)
     */
    private $chauffeur;

    /**
     * @var bool
     *
     * @ORM\Column(name="pleinOffert", type="boolean", nullable=true)
     */
    private $pleinOffert;

    /**
     * @var bool
     *
     * @ORM\Column(name="SiegeBB", type="boolean", nullable=true)
     */
    private $siegeBB;


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
     * Set chauffeur
     *
     * @param boolean $chauffeur
     *
     * @return Options
     */
    public function setChauffeur($chauffeur)
    {
        $this->chauffeur = $chauffeur;

        return $this;
    }

    /**
     * Get chauffeur
     *
     * @return bool
     */
    public function getChauffeur()
    {
        return $this->chauffeur;
    }

    /**
     * Set pleinOffert
     *
     * @param boolean $pleinOffert
     *
     * @return Options
     */
    public function setPleinOffert($pleinOffert)
    {
        $this->pleinOffert = $pleinOffert;

        return $this;
    }

    /**
     * Get pleinOffert
     *
     * @return bool
     */
    public function getPleinOffert()
    {
        return $this->pleinOffert;
    }

    /**
     * Set siegeBB
     *
     * @param boolean $siegeBB
     *
     * @return Options
     */
    public function setSiegeBB($siegeBB)
    {
        $this->siegeBB = $siegeBB;

        return $this;
    }

    /**
     * Get siegeBB
     *
     * @return bool
     */
    public function getSiegeBB()
    {
        return $this->siegeBB;
    }
}


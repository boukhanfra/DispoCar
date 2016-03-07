<?php

namespace parcAutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boite
 *
 * @ORM\Table(name="boite")
 * @ORM\Entity(repositoryClass="parcAutoBundle\Repository\BoiteRepository")
 */
class Boite
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;


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
     * Set idBoite
     *
     * @param integer $idBoite
     *
     * @return Boite
     */
    public function setIdBoite($idBoite)
    {
        $this->idBoite = $idBoite;

        return $this;
    }

    /**
     * Get idBoite
     *
     * @return int
     */
    public function getIdBoite()
    {
        return $this->idBoite;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Boite
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}


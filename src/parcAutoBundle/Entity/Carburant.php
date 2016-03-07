<?php

namespace parcAutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carburant
 *
 * @ORM\Table(name="carburant")
 * @ORM\Entity(repositoryClass="parcAutoBundle\Repository\CarburantRepository")
 */
class Carburant
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
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
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
     * Set idCarburant
     *
     * @param integer $idCarburant
     *
     * @return Carburant
     */
    public function setIdCarburant($idCarburant)
    {
        $this->idCarburant = $idCarburant;

        return $this;
    }

    /**
     * Get idCarburant
     *
     * @return int
     */
    public function getIdCarburant()
    {
        return $this->idCarburant;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Carburant
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


<?php

namespace ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nondispo
 *
 * @ORM\Table(name="nondispo")
 * @ORM\Entity(repositoryClass="ReservationBundle\Repository\NondispoRepository")
 */
class Nondispo
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
     * @ORM\Column(name="dispo", type="boolean")
     */
    private $dispo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime")
     */
    private $dateFin;


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
     * Set idNondispo
     *
     * @param integer $idNondispo
     *
     * @return Nondispo
     */
    public function setIdNondispo($idNondispo)
    {
        $this->idNondispo = $idNondispo;

        return $this;
    }

    /**
     * Get idNondispo
     *
     * @return int
     */
    public function getIdNondispo()
    {
        return $this->idNondispo;
    }

    /**
     * Set dispo
     *
     * @param boolean $dispo
     *
     * @return Nondispo
     */
    public function setDispo($dispo)
    {
        $this->dispo = $dispo;

        return $this;
    }

    /**
     * Get dispo
     *
     * @return bool
     */
    public function getDispo()
    {
        return $this->dispo;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Nondispo
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param string $dateFin
     *
     * @return Nondispo
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return string
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }
}


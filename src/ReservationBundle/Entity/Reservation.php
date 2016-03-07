<?php

namespace ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="ReservationBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateReservation", type="datetime")
     */
    private $dateReservation;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuPrise", type="string", length=255)
     */
    private $lieuPrise;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuRecuperation", type="string", length=255)
     */
    private $lieuRecuperation;

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
     * @var float
     *
     * @ORM\Column(name="montant", type="float", nullable=true)
     */
    private $montant;

    /**
     * @var bool
     *
     * @ORM\Column(name="conclu", type="boolean")
     */
    private $conclu;


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
     * Set idReservation
     *
     * @param integer $idReservation
     *
     * @return Reservation
     */
    public function setIdReservation($idReservation)
    {
        $this->idReservation = $idReservation;

        return $this;
    }

    /**
     * Get idReservation
     *
     * @return int
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set lieuPrise
     *
     * @param string $lieuPrise
     *
     * @return Reservation
     */
    public function setLieuPrise($lieuPrise)
    {
        $this->lieuPrise = $lieuPrise;

        return $this;
    }

    /**
     * Get lieuPrise
     *
     * @return string
     */
    public function getLieuPrise()
    {
        return $this->lieuPrise;
    }

    /**
     * Set lieuRecuperation
     *
     * @param string $lieuRecuperation
     *
     * @return Reservation
     */
    public function setLieuRecuperation($lieuRecuperation)
    {
        $this->lieuRecuperation = $lieuRecuperation;

        return $this;
    }

    /**
     * Get lieuRecuperation
     *
     * @return string
     */
    public function getLieuRecuperation()
    {
        return $this->lieuRecuperation;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Reservation
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
     * @param \DateTime $dateFin
     *
     * @return Reservation
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Reservation
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set conclu
     *
     * @param boolean $conclu
     *
     * @return Reservation
     */
    public function setConclu($conclu)
    {
        $this->conclu = $conclu;

        return $this;
    }

    /**
     * Get conclu
     *
     * @return bool
     */
    public function getConclu()
    {
        return $this->conclu;
    }
}


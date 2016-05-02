<?php

namespace DispoCar\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DispoCar\ParcAutoBundle\Entity\Vehicule;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="DispoCar\ReservationBundle\Repository\ReservationRepository")
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
     * @var Evaluation
     * @ORM\OneToOne(targetEntity="DispoCar\ReservationBundle\Entity\Evaluation")
     * @ORM\JoinColumn(name="evaluation_id",referencedColumnName="id")
     */
    private $evaluation;


    /**
     * @var Client
     * @ORM\ManyToOne(targetEntity="DispoCar\ReservationBundle\Entity\Client",inversedBy="reservations")
     * @ORM\JoinColumn(name="client_id",referencedColumnName="id")
     */
    private $client;

    /**
     * @var Vehicule
     * @ORM\ManyToOne(targetEntity="DispoCar\ParcAutoBundle\Entity\Vehicule",inversedBy="reservations")
     * @ORM\JoinColumn(name="vehicule_id",referencedColumnName="id")
     */
    private $vehicule;

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

    /**
     * Set evaluation
     *
     * @param \DispoCar\ReservationBundle\Entity\Evaluation $evaluation
     *
     * @return Reservation
     */
    public function setEvaluation(\DispoCar\ReservationBundle\Entity\Evaluation $evaluation = null)
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    /**
     * Get evaluation
     *
     * @return \DispoCar\ReservationBundle\Entity\Evaluation
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * Set client
     *
     * @param \DispoCar\ReservationBundle\Entity\Client $client
     *
     * @return Reservation
     */
    public function setClient(\DispoCar\ReservationBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \DispoCar\ReservationBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set vehicule
     *
     * @param \DispoCar\ParcAutoBundle\Entity\Vehicule $vehicule
     *
     * @return Reservation
     */
    public function setVehicule(\DispoCar\ParcAutoBundle\Entity\Vehicule $vehicule = null)
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    /**
     * Get vehicule
     *
     * @return \DispoCar\ParcAutoBundle\Entity\Vehicule
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }
}

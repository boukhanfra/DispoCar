<?php

namespace DispoCar\ParcAutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DispoCar\ReservationBundle\Entity\Reservation;
use DispoCar\AgenceBundle\Entity\Agence;
use DispoCar\ReservationBundle\Entity\NonDisponibilite;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="DispoCar\ParcAutoBundle\Repository\VehiculeRepository")
 */
class Vehicule
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
     * @ORM\Column(name="model", type="string", length=255, nullable=true)
     */
    private $model;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrPlaces", type="integer", nullable=true)
     */
    private $nbrPlaces;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrPortes", type="integer", nullable=true)
     */
    private $nbrPortes;


    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;


    /**
     * @var Boite
     * @ORM\ManyToOne(targetEntity="DispoCar\ParcAutoBundle\Entity\Boite")
     * @ORM\JoinColumn(name="boite_id",referencedColumnName="id")
     */
    private $boite;

    /**
     * @var Carburant
     * @ORM\ManyToOne(targetEntity="DispoCar\ParcAutoBundle\Entity\Carburant")
     * @ORM\JoinColumn(name="carburant_id",referencedColumnName="id")
     */
    private $carburant;

    /**
     * @var Categorie
     * @ORM\ManyToOne(targetEntity="DispoCar\ParcAutoBundle\Entity\Categorie")
     * @ORM\JoinColumn(name="categorie_id",referencedColumnName="id")
     */
    private $categorie;

    /**
     * @var Marque
     * @ORM\ManyToOne(targetEntity="DispoCar\ParcAutoBundle\Entity\Marque")
     * @ORM\JoinColumn(name="marque_id",referencedColumnName="id")
     */
    private  $marque;

    /**
     * @var Options
     * @ORM\ManyToOne(targetEntity="DispoCar\ParcAutoBundle\Entity\Options")
     * @ORM\JoinColumn(name="option_id",referencedColumnName="id")
     */
    private $options;

    /**
     * @var Prix
     * @ORM\OneToOne(targetEntity="DispoCar\ParcAutoBundle\Entity\Prix")
     * @ORM\JoinColumn(name="prix_id",referencedColumnName="id")
     */
    private $prix;



    /**
     * @var int
     *
     * @ORM\Column(name="nombre", type="integer", nullable=false)
     */
    private $nombre;

    /**
     * @return int
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param int $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    /**
     * @var Reservation
     * @ORM\OneToMany(targetEntity="DispoCar\ReservationBundle\Entity\Reservation",mappedBy="vehicule")
     */
    private $reservations;

    /**
     * @var Agence
     * @ORM\ManyToOne(targetEntity="DispoCar\AgenceBundle\Entity\Agence",inversedBy="vehicules")
     * @ORM\JoinColumn(name="agence_id",referencedColumnName="id")
     */
    private $agence;

    /**
     * @var NonDisponibilite
     * @ORM\OneToMany(targetEntity="DispoCar\ReservationBundle\Entity\NonDisponibilite",mappedBy="vehicule")
     */
    private $nonDisponibilites;

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
     * Set model
     *
     * @param string $model
     *
     * @return Vehicule
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set nbrPlaces
     *
     * @param integer $nbrPlaces
     *
     * @return Vehicule
     */
    public function setNbrPlaces($nbrPlaces)
    {
        $this->nbrPlaces = $nbrPlaces;

        return $this;
    }

    /**
     * Get nbrPlaces
     *
     * @return int
     */
    public function getNbrPlaces()
    {
        return $this->nbrPlaces;
    }

    /**
     * Set nbrPortes
     *
     * @param integer $nbrPortes
     *
     * @return Vehicule
     */
    public function setNbrPortes($nbrPortes)
    {
        $this->nbrPortes = $nbrPortes;

        return $this;
    }

    /**
     * Get nbrPortes
     *
     * @return int
     */
    public function getNbrPortes()
    {
        return $this->nbrPortes;
    }


    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Vehicule
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->nonDisponibilites = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set boite
     *
     * @param \DispoCar\ParcAutoBundle\Entity\Boite $boite
     *
     * @return Vehicule
     */
    public function setBoite(\DispoCar\ParcAutoBundle\Entity\Boite $boite = null)
    {
        $this->boite = $boite;

        return $this;
    }

    /**
     * Get boite
     *
     * @return \DispoCar\ParcAutoBundle\Entity\Boite
     */
    public function getBoite()
    {
        return $this->boite;
    }

    /**
     * Set carburant
     *
     * @param \DispoCar\ParcAutoBundle\Entity\Carburant $carburant
     *
     * @return Vehicule
     */
    public function setCarburant(\DispoCar\ParcAutoBundle\Entity\Carburant $carburant = null)
    {
        $this->carburant = $carburant;

        return $this;
    }

    /**
     * Get carburant
     *
     * @return \DispoCar\ParcAutoBundle\Entity\Carburant
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * Set categorie
     *
     * @param \DispoCar\ParcAutoBundle\Entity\Categorie $categorie
     *
     * @return Vehicule
     */
    public function setCategorie(\DispoCar\ParcAutoBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \DispoCar\ParcAutoBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set marque
     *
     * @param \DispoCar\ParcAutoBundle\Entity\Marque $marque
     *
     * @return Vehicule
     */
    public function setMarque(\DispoCar\ParcAutoBundle\Entity\Marque $marque = null)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \DispoCar\ParcAutoBundle\Entity\Marque
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set option
     *
     * @param \DispoCar\ParcAutoBundle\Entity\Options $option
     *
     * @return Vehicule
     */
    public function setOptions(\DispoCar\ParcAutoBundle\Entity\Options $option = null)
    {
        $this->options = $option;

        return $this;
    }

    /**
     * Get option
     *
     * @return \DispoCar\ParcAutoBundle\Entity\Options
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set prix
     *
     * @param \DispoCar\ParcAutoBundle\Entity\Prix $prix
     *
     * @return Vehicule
     */
    public function setPrix(\DispoCar\ParcAutoBundle\Entity\Prix $prix = null)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return \DispoCar\ParcAutoBundle\Entity\Prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Add reservation
     *
     * @param \DispoCar\ReservationBundle\Entity\Reservation $reservation
     *
     * @return Vehicule
     */
    public function addReservation(\DispoCar\ReservationBundle\Entity\Reservation $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \DispoCar\ReservationBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\DispoCar\ReservationBundle\Entity\Reservation $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Set agence
     *
     * @param \DispoCar\AgenceBundle\Entity\Agence $agence
     *
     * @return Vehicule
     */
    public function setAgence(\DispoCar\AgenceBundle\Entity\Agence $agence = null)
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * Get agence
     *
     * @return \DispoCar\AgenceBundle\Entity\Agence
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * Add nonDisponibilite
     *
     * @param \DispoCar\ReservationBundle\Entity\NonDisponibilite $nonDisponibilite
     *
     * @return Vehicule
     */
    public function addNonDisponibilite(\DispoCar\ReservationBundle\Entity\NonDisponibilite $nonDisponibilite)
    {
        $this->nonDisponibilites[] = $nonDisponibilite;

        return $this;
    }

    /**
     * Remove nonDisponibilite
     *
     * @param \DispoCar\ReservationBundle\Entity\NonDisponibilite $nonDisponibilite
     */
    public function removeNonDisponibilite(\DispoCar\ReservationBundle\Entity\NonDisponibilite $nonDisponibilite)
    {
        $this->nonDisponibilites->removeElement($nonDisponibilite);
    }

    /**
     * Get nonDisponibilites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNonDisponibilites()
    {
        return $this->nonDisponibilites;
    }
}

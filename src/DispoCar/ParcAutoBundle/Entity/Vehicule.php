<?php

namespace DispoCar\ParcAutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var bool
     *
     * @ORM\Column(name="climatisation", type="boolean", nullable=true)
     */
    private $climatisation;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;


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
     * Set climatisation
     *
     * @param boolean $climatisation
     *
     * @return Vehicule
     */
    public function setClimatisation($climatisation)
    {
        $this->climatisation = $climatisation;

        return $this;
    }

    /**
     * Get climatisation
     *
     * @return bool
     */
    public function getClimatisation()
    {
        return $this->climatisation;
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
}


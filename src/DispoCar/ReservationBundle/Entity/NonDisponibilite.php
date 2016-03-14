<?php

namespace DispoCar\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DispoCar\ParcAutoBundle\Entity\Vehicule;

/**
 * Nondispo
 *
 * @ORM\Table(name="nondispo")
 * @ORM\Entity(repositoryClass="DispoCar\ReservationBundle\Repository\NonDisponibiliteRepository")
 */
class NonDisponibilite
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
     * @var \DateTime
     * @ORM\Column(name="created_on",type="datetime")
     */
    private $createdOn;


    /**
     * @var string
     * @ORM\Column(name="created_by",type="string")
     */
    private $createdBy;

    /**
     * @var \DateTime
     * @ORM\Column(name="updated_on",type="datetime")
     */
    private $updatedOn;


    /**
     * @var string
     * @ORM\Column(name="updated_by",type="string")
     */
    private $updatedBy;


    /**
     * @var Vehicule
     * @ORM\ManyToOne(targetEntity="DispoCar\ParcAutoBundle\Entity\Vehicule",inversedBy="nonDisponibilites")
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
     * Set dispo
     *
     * @param boolean $dispo
     *
     */
    public function setDispo($dispo)
    {
        $this->dispo = $dispo;

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

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     *
     * @return NonDisponibilite
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return NonDisponibilite
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedOn
     *
     * @param \DateTime $updatedOn
     *
     * @return NonDisponibilite
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->updatedOn = $updatedOn;

        return $this;
    }

    /**
     * Get updatedOn
     *
     * @return \DateTime
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }

    /**
     * Set updatedBy
     *
     * @param string $updatedBy
     *
     * @return NonDisponibilite
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set vehicule
     *
     * @param \DispoCar\ParcAutoBundle\Entity\Vehicule $vehicule
     *
     * @return NonDisponibilite
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

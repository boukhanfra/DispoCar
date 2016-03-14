<?php

namespace DispoCar\AbonnementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnement
 *
 * @ORM\Table(name="abonnement")
 * @ORM\Entity(repositoryClass="DispoCar\AbonnementBundle\Repository\AbonnementRepository")
 */
class Abonnement
{

    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type_abonnement", type="string", length=255, nullable=true)
     */
    private $typeAbonnement;

    
    /**
     * @var string
     *
     * @ORM\Column(name="date_abonnement", type="datetime", nullable=true)
     */
    private $dateAbonnement;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="integer", nullable=true)
     */
    private $duree;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="contrat", type="text", nullable=true)
     */
    private $contrat;

    /**
     * @var Privilege
     * @ORM\OneToOne(targetEntity="DispoCar\AbonnementBundle\Entity\Privilege")
     * @ORM\JoinColumn(name="previlege_id",referencedColumnName="id")
     */
    private $privilege;


    /**
     * @var Reglement
     * @ORM\OneToMany(targetEntity="DispoCar\AbonnementBundle\Entity\Reglement",mappedBy="abonnement")
     */
    private $regelements;

	
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->regelements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Abonnement
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typeAbonnement
     *
     * @param string $typeAbonnement
     *
     * @return Abonnement
     */
    public function setTypeAbonnement($typeAbonnement)
    {
        $this->typeAbonnement = $typeAbonnement;

        return $this;
    }

    /**
     * Get typeAbonnement
     *
     * @return string
     */
    public function getTypeAbonnement()
    {
        return $this->typeAbonnement;
    }

    /**
     * Set dateAbonnement
     *
     * @param \DateTime $dateAbonnement
     *
     * @return Abonnement
     */
    public function setDateAbonnement($dateAbonnement)
    {
        $this->dateAbonnement = $dateAbonnement;

        return $this;
    }

    /**
     * Get dateAbonnement
     *
     * @return \DateTime
     */
    public function getDateAbonnement()
    {
        return $this->dateAbonnement;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Abonnement
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set contrat
     *
     * @param string $contrat
     *
     * @return Abonnement
     */
    public function setContrat($contrat)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return string
     */
    public function getContrat()
    {
        return $this->contrat;
    }

    /**
     * Set privilege
     *
     * @param \DispoCar\AbonnementBundle\Entity\Privilege $privilege
     *
     * @return Abonnement
     */
    public function setPrivilege(\DispoCar\AbonnementBundle\Entity\Privilege $privilege = null)
    {
        $this->privilege = $privilege;

        return $this;
    }

    /**
     * Get privilege
     *
     * @return \DispoCar\AbonnementBundle\Entity\Privilege
     */
    public function getPrivilege()
    {
        return $this->privilege;
    }

    /**
     * Add regelement
     *
     * @param \DispoCar\AbonnementBundle\Entity\Reglement $regelement
     *
     * @return Abonnement
     */
    public function addRegelement(\DispoCar\AbonnementBundle\Entity\Reglement $regelement)
    {
        $this->regelements[] = $regelement;

        return $this;
    }

    /**
     * Remove regelement
     *
     * @param \DispoCar\AbonnementBundle\Entity\Reglement $regelement
     */
    public function removeRegelement(\DispoCar\AbonnementBundle\Entity\Reglement $regelement)
    {
        $this->regelements->removeElement($regelement);
    }

    /**
     * Get regelements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRegelements()
    {
        return $this->regelements;
    }
}

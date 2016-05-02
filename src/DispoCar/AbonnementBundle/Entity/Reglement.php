<?php

namespace DispoCar\AbonnementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglement
 *
 * @ORM\Table(name="reglement")
 * @ORM\Entity(repositoryClass="DispoCar\AbonnementBundle\Repository\ReglementRepository")
 */
class Reglement
{

    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="idReglement", type="integer")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePaiement", type="datetime", nullable=true)
     */
    private $datePaiement;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", nullable=true)
     */
    private $montant;

    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float", nullable=true)
     */
    private $solde;


    /**
     * @var Abonnement
     * @ORM\ManyToOne(targetEntity="DispoCar\AbonnementBundle\Entity\Abonnement",inversedBy="regelements")
     * @ORM\JoinColumn(name="abonnement_id",referencedColumnName="id")
     */
    private $abonnement;


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
     * Set datePaiement
     *
     * @param \DateTime $datePaiement
     *
     * @return Reglement
     */
    public function setDatePaiement($datePaiement)
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    /**
     * Get datePaiement
     *
     * @return \DateTime
     */
    public function getDatePaiement()
    {
        return $this->datePaiement;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Reglement
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
     * Set solde
     *
     * @param float $solde
     *
     * @return Reglement
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return float
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Reglement
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set abonnement
     *
     * @param \DispoCar\AbonnementBundle\Entity\Abonnement $abonnement
     *
     * @return Reglement
     */
    public function setAbonnement(\DispoCar\AbonnementBundle\Entity\Abonnement $abonnement = null)
    {
        $this->abonnement = $abonnement;

        return $this;
    }

    /**
     * Get abonnement
     *
     * @return \DispoCar\AbonnementBundle\Entity\Abonnement
     */
    public function getAbonnement()
    {
        return $this->abonnement;
    }
}

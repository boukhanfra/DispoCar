<?php

namespace AbonnementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglement
 *
 * @ORM\Table(name="reglement")
 * @ORM\Entity(repositoryClass="AbonnementBundle\Repository\ReglementRepository")
 */
class Reglement
{

    /**
     * @var int
     *
     * @ORM\Column(name="idReglement", type="integer")
     */
    private $idReglement;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idReglement
     *
     * @param integer $idReglement
     *
     * @return Reglement
     */
    public function setIdReglement($idReglement)
    {
        $this->idReglement = $idReglement;

        return $this;
    }

    /**
     * Get idReglement
     *
     * @return int
     */
    public function getIdReglement()
    {
        return $this->idReglement;
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
}


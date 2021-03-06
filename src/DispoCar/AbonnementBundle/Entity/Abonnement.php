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
     *
     * @ORM\Column(name="idAbonnement", type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="typeAbonnement", type="string", length=255, nullable=true)
     */
    private $typeAbonnement;

    
    /**
     * @var string
     *
     * @ORM\Column(name="dateAbonnement", type="datetime", nullable=true)
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get idAbonnement
     *
     * @return int
     */
    public function getIdAbonnement()
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
	public function getDateAbonnement() {
		return $this->dateAbonnement;
	}
	public function setDateAbonnement($dateAbonnement) {
		$this->dateAbonnement = $dateAbonnement;
		return $this;
	}
	public function getDuree() {
		return $this->duree;
	}
	public function setDuree($duree) {
		$this->duree = $duree;
		return $this;
	}
	public function getContrat() {
		return $this->contrat;
	}
	public function setContrat($contrat) {
		$this->contrat = $contrat;
		return $this;
	}
	
	
}


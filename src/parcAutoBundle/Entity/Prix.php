<?php

namespace parcAutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prix
 *
 * @ORM\Table(name="prix")
 * @ORM\Entity(repositoryClass="parcAutoBundle\Repository\PrixRepository")
 */
class Prix
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
     * @var float
     *
     * @ORM\Column(name="courteDuree", type="float", nullable=true)
     */
    private $courteDuree;

    /**
     * @var float
     *
     * @ORM\Column(name="moyenneDuree", type="float", nullable=true)
     */
    private $moyenneDuree;

    /**
     * @var float
     *
     * @ORM\Column(name="longueDuree", type="float", nullable=true)
     */
    private $longueDuree;

    /**
     * @var float
     *
     * @ORM\Column(name="tresLongueDuree", type="float",nullable=true)
     */
    private $tresLongueDuree;


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
     * Set idPrix
     *
     * @param integer $idPrix
     *
     * @return Prix
     */
    public function setIdPrix($idPrix)
    {
        $this->idPrix = $idPrix;

        return $this;
    }

    /**
     * Get idPrix
     *
     * @return int
     */
    public function getIdPrix()
    {
        return $this->idPrix;
    }

    /**
     * Set courteDuree
     *
     * @param float $courteDuree
     *
     * @return Prix
     */
    public function setCourteDuree($courteDuree)
    {
        $this->courteDuree = $courteDuree;

        return $this;
    }

    /**
     * Get courteDuree
     *
     * @return float
     */
    public function getCourteDuree()
    {
        return $this->courteDuree;
    }

    /**
     * Set moyenneDuree
     *
     * @param float $moyenneDuree
     *
     * @return Prix
     */
    public function setMoyenneDuree($moyenneDuree)
    {
        $this->moyenneDuree = $moyenneDuree;

        return $this;
    }

    /**
     * Get moyenneDuree
     *
     * @return float
     */
    public function getMoyenneDuree()
    {
        return $this->moyenneDuree;
    }

    /**
     * Set longueDuree
     *
     * @param float $longueDuree
     *
     * @return Prix
     */
    public function setLongueDuree($longueDuree)
    {
        $this->longueDuree = $longueDuree;

        return $this;
    }

    /**
     * Get longueDuree
     *
     * @return float
     */
    public function getLongueDuree()
    {
        return $this->longueDuree;
    }

    /**
     * Set tresLongueDuree
     *
     * @param float $tresLongueDuree
     *
     * @return Prix
     */
    public function setTresLongueDuree($tresLongueDuree)
    {
        $this->tresLongueDuree = $tresLongueDuree;

        return $this;
    }

    /**
     * Get tresLongueDuree
     *
     * @return float
     */
    public function getTresLongueDuree()
    {
        return $this->tresLongueDuree;
    }
}


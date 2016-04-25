<?php

namespace DispoCar\AgenceBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use DispoCar\ParcAutoBundle\Entity\Vehicule;
use DispoCar\AbonnementBundle\Entity\Abonnement;
/**
 * Agence
 *
 * @ORM\Table(name="agence")
 * @ORM\Entity(repositoryClass="DispoCar\AgenceBundle\Repository\AgenceRepository")
 */
class Agence
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
     * @ORM\Column(name="raisonSocial", type="string", length=255)
     */
    private $raisonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="gerant", type="string", length=255)
     */
    private $gerant;

    /**
     * @var string
     *
     * @ORM\Column(name="rc", type="string", length=255)
     */
    private $rc;

    /**
     * @var string
     *
     * @ORM\Column(name="domiciliation", type="string", length=255)
     */
    private $domiciliation;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=255)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="fix", type="string", length=255)
     */
    private $fix;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="sousLocation", type="boolean")
     */
    private $sousLocation;

    /**
     * @var bool
     *
     * @ORM\Column(name="locationHeure", type="boolean")
     */
    private $locationHeure;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer")
     */
    private $score;


    /**
     * @var Vehicule
     * @ORM\OneToMany(targetEntity="DispoCar\ParcAutoBundle\Entity\Vehicule",mappedBy="agence")
     */
    private $vehicules;

    /**
     * @var Ads
     * @ORM\OneToMany(targetEntity="DispoCar\AgenceBundle\Entity\Ads", mappedBy="agence")
     */
    private $ads;

    /**
     * @var Presentation
     * @ORM\OneToOne(targetEntity="DispoCar\AgenceBundle\Entity\Presentation")
     * @ORM\JoinColumn(name="presentation_id",referencedColumnName="id")
     */
    private $presentation;


    /**
     * @var PointLocation
     * @ORM\OneToMany(targetEntity="DispoCar\AgenceBundle\Entity\PointLocation",mappedBy="agence")
     */
    private $pointsLocation;

    /**
     * @var Abonnement
     * @ORM\OneToOne(targetEntity="DispoCar\AbonnementBundle\Entity\Abonnement")
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
     * Get idAgence
     *
     * @return int
     */
    public function getIdAgence()
    {
        return $this->id;
    }

    /**
     * Set raisonSocial
     *
     * @param string $raisonSocial
     *
     * @return Agence
     */
    public function setRaisonSocial($raisonSocial)
    {
        $this->raisonSocial = $raisonSocial;

        return $this;
    }

    /**
     * Get raisonSocial
     *
     * @return string
     */
    public function getRaisonSocial()
    {
        return $this->raisonSocial;
    }

    /**
     * Set gerant
     *
     * @param string $gerant
     *
     * @return Agence
     */
    public function setGerant($gerant)
    {
        $this->gerant = $gerant;

        return $this;
    }

    /**
     * Get gerant
     *
     * @return string
     */
    public function getGerant()
    {
        return $this->gerant;
    }

    /**
     * Set rc
     *
     * @param string $rc
     *
     * @return Agence
     */
    public function setRc($rc)
    {
        $this->rc = $rc;

        return $this;
    }

    /**
     * Get rc
     *
     * @return string
     */
    public function getRc()
    {
        return $this->rc;
    }

    /**
     * Set domiciliation
     *
     * @param string $domiciliation
     *
     * @return Agence
     */
    public function setDomiciliation($domiciliation)
    {
        $this->domiciliation = $domiciliation;

        return $this;
    }

    /**
     * Get domiciliation
     *
     * @return string
     */
    public function getDomiciliation()
    {
        return $this->domiciliation;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return Agence
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set fix
     *
     * @param string $fix
     *
     * @return Agence
     */
    public function setFix($fix)
    {
        $this->fix = $fix;

        return $this;
    }

    /**
     * Get fix
     *
     * @return string
     */
    public function getFix()
    {
        return $this->fix;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Agence
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Agence
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set sousLocation
     *
     * @param boolean $sousLocation
     *
     * @return Agence
     */
    public function setSousLocation($sousLocation)
    {
        $this->sousLocation = $sousLocation;

        return $this;
    }

    /**
     * Get sousLocation
     *
     * @return bool
     */
    public function getSousLocation()
    {
        return $this->sousLocation;
    }

    /**
     * Set locationHeure
     *
     * @param boolean $locationHeure
     *
     * @return Agence
     */
    public function setLocationHeure($locationHeure)
    {
        $this->locationHeure = $locationHeure;

        return $this;
    }

    /**
     * Get locationHeure
     *
     * @return bool
     */
    public function getLocationHeure()
    {
        return $this->locationHeure;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Agence
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vehicules = new ArrayCollection();
        $this->ads = new ArrayCollection();
        $this->pointsLocation = new ArrayCollection();
    }

    /**
     * Add vehicule
     *
     * @param \DispoCar\ParcAutoBundle\Entity\Vehicule $vehicule
     *
     * @return Agence
     */
    public function addVehicule(Vehicule $vehicule)
    {
        $this->vehicules[] = $vehicule;

        return $this;
    }

    /**
     * Remove vehicule
     *
     * @param \DispoCar\ParcAutoBundle\Entity\Vehicule $vehicule
     */
    public function removeVehicule(Vehicule $vehicule)
    {
        $this->vehicules->removeElement($vehicule);
    }

    /**
     * Get vehicules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVehicules()
    {
        return $this->vehicules;
    }

    /**
     * Add ad
     *
     * @param \DispoCar\AgenceBundle\Entity\Ads $ad
     *
     * @return Agence
     */
    public function addAd(Ads $ad)
    {
        $this->ads[] = $ad;

        return $this;
    }

    /**
     * Remove ad
     *
     * @param \DispoCar\AgenceBundle\Entity\Ads $ad
     */
    public function removeAd(Ads $ad)
    {
        $this->ads->removeElement($ad);
    }

    /**
     * Get ads
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAds()
    {
        return $this->ads;
    }

    /**
     * Set presentation
     *
     * @param \DispoCar\AgenceBundle\Entity\Presentation $presentation
     *
     * @return Agence
     */
    public function setPresentation(Presentation $presentation = null)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return \DispoCar\AgenceBundle\Entity\Presentation
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Add pointsLocation
     *
     * @param \DispoCar\AgenceBundle\Entity\PointLocation $pointsLocation
     *
     * @return Agence
     */
    public function addPointsLocation(PointLocation $pointsLocation)
    {
        $this->pointsLocation[] = $pointsLocation;

        return $this;
    }

    /**
     * Remove pointsLocation
     *
     * @param \DispoCar\AgenceBundle\Entity\PointLocation $pointsLocation
     */
    public function removePointsLocation(PointLocation $pointsLocation)
    {
        $this->pointsLocation->removeElement($pointsLocation);
    }

    /**
     * Get pointsLocation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPointsLocation()
    {
        return $this->pointsLocation;
    }

    /**
     * Set abonnement
     *
     * @param \DispoCar\AbonnementBundle\Entity\Abonnement $abonnement
     *
     * @return Agence
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

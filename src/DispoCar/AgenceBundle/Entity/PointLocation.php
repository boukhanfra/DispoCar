<?php

namespace DispoCar\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PointLocation
 *
 * @ORM\Table(name="point_location")
 * @ORM\Entity(repositoryClass="DispoCar\AgenceBundle\Repository\PointLocationRepository")
 */
class PointLocation
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
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", nullable=true)
     */
    private $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="repere", type="string", length=255, nullable=true)
     */
    private $repere;


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
     * Get idPointLocation
     *
     * @return int
     */
    public function getIdPointLocation()
    {
        return $this->id;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return PointLocation
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return PointLocation
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return PointLocation
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set repere
     *
     * @param string $repere
     *
     * @return PointLocation
     */
    public function setRepere($repere)
    {
        $this->repere = $repere;

        return $this;
    }

    /**
     * Get repere
     *
     * @return string
     */
    public function getRepere()
    {
        return $this->repere;
    }
}


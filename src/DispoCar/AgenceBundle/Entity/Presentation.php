<?php

namespace DispoCar\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Presentation
 *
 * @ORM\Table(name="presentation")
 * @ORM\Entity(repositoryClass="AgenceBundle\Repository\PresentationRepository")
 */
class Presentation
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
     * @ORM\Column(name="apropos", type="text", nullable=true)
     */
    private $apropos;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="text", nullable=true)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="motDirecteur", type="text", nullable=true)
     */
    private $motDirecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="banner", type="string", length=255, nullable=true)
     */
    private $banner;


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
     * Get idPresentation
     *
     * @return int
     */
    public function getIdPresentation()
    {
        return $this->id;
    }

    /**
     * Set apropos
     *
     * @param string $apropos
     *
     * @return Presentation
     */
    public function setApropos($apropos)
    {
        $this->apropos = $apropos;

        return $this;
    }

    /**
     * Get apropos
     *
     * @return string
     */
    public function getApropos()
    {
        return $this->apropos;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Presentation
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set motDirecteur
     *
     * @param string $motDirecteur
     *
     * @return Presentation
     */
    public function setMotDirecteur($motDirecteur)
    {
        $this->motDirecteur = $motDirecteur;

        return $this;
    }

    /**
     * Get motDirecteur
     *
     * @return string
     */
    public function getMotDirecteur()
    {
        return $this->motDirecteur;
    }

    /**
     * Set banner
     *
     * @param string $banner
     *
     * @return Presentation
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get banner
     *
     * @return string
     */
    public function getBanner()
    {
        return $this->banner;
    }
}


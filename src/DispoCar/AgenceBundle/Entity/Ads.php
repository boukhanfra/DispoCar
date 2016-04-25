<?php

namespace DispoCar\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ads
 *
 * @ORM\Table(name="ads")
 * @ORM\Entity(repositoryClass="DispoCar\AgenceBundle\Repository\AdsRepository")
 */
class Ads
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
     * @ORM\Column(name="typeAd", type="string", length=255, nullable=true)
     */
    private $typeAd;
    

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    private $message;


    /**
     * @var Agence
     * @ORM\ManyToOne(targetEntity="DispoCar\AgenceBundle\Entity\Agence",inversedBy="ads")
     * @ORM\JoinColumn(name="agence_id",referencedColumnName="id")
     */
    private $agence;

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
     * Get idAd
     *
     * @return int
     */
    public function getIdAd()
    {
        return $this->id;
    }

    /**
     * Set typeAd
     *
     * @param string $typeAd
     *
     * @return Ads
     */
    public function setTypeAd($typeAd)
    {
        $this->typeAd = $typeAd;

        return $this;
    }

    /**
     * Get typeAd
     *
     * @return string
     */
    public function getTypeAd()
    {
        return $this->typeAd;
    }
	public function getMessage() {
		return $this->message;
	}
	public function setMessage($message) {
		$this->message = $message;
		return $this;
	}
	

    /**
     * Set agence
     *
     * @param \DispoCar\AgenceBundle\Entity\Agence $agence
     *
     * @return Ads
     */
    public function setAgence(\DispoCar\AgenceBundle\Entity\Agence $agence = null)
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * Get agence
     *
     * @return \DispoCar\AgenceBundle\Entity\Agence
     */
    public function getAgence()
    {
        return $this->agence;
    }
}

<?php

namespace AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ads
 *
 * @ORM\Table(name="ads")
 * @ORM\Entity(repositoryClass="AgenceBundle\Repository\AdsRepository")
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idAd
     *
     * @param integer $idAd
     *
     * @return Ads
     */
    public function setIdAd($idAd)
    {
        $this->idAd = $idAd;

        return $this;
    }

    /**
     * Get idAd
     *
     * @return int
     */
    public function getIdAd()
    {
        return $this->idAd;
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
	
}


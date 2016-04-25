<?php

namespace AbonnementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModeReglement
 *
 * @ORM\Table(name="mode_reglement")
 * @ORM\Entity(repositoryClass="DispoCar\AbonnementBundle\Repository\ModeReglementRepository")
 */
class ModeReglement
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
     * @ORM\Column(name="mode", type="string", length=255, nullable=true)
     */
    private $mode;


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
     * Get idMode
     *
     * @return int
     */
    public function getIdMode()
    {
        return $this->id;
    }

    /**
     * Set mode
     *
     * @param string $mode
     *
     * @return ModeReglement
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }
}


<?php

namespace DispoCar\ParcAutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boite
 *
 * @ORM\Table(name="boite")
 * @ORM\Entity(repositoryClass="DispoCar\ParcAutoBundle\Repository\BoiteRepository")
 */
class Boite
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;


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
     * Set type
     *
     * @param string $type
     *
     * @return Boite
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->type();
    }
}

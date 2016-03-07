<?php

namespace parcAutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marque
 *
 * @ORM\Table(name="marque")
 * @ORM\Entity(repositoryClass="parcAutoBundle\Repository\MarqueRepository")
 */
class Marque
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


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
     * Set idMarque
     *
     * @param integer $idMarque
     *
     * @return Marque
     */
    public function setIdMarque($idMarque)
    {
        $this->idMarque = $idMarque;

        return $this;
    }

    /**
     * Get idMarque
     *
     * @return int
     */
    public function getIdMarque()
    {
        return $this->idMarque;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Marque
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}


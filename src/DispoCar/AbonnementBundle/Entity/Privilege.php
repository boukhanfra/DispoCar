<?php

namespace DispoCar\AbonnementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Privilege
 *
 * @ORM\Table(name="privilege")
 * @ORM\Entity(repositoryClass="DispoCar\AbonnementBundle\Repository\PrivilegeRepository")
 */
class Privilege
{

    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="privilege", type="string")
     */
    private $privilege;
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

}

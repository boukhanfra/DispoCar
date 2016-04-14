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
     *
     * @ORM\Column(name="idPrivilege", type="integer")
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


    /**
     * Get idPrivilege
     *
     * @return int
     */
    public function getIdPrivilege()
    {
        return $this->id;
    }
	public function getPrivilege() {
		return $this->privilege;
	}
	public function setPrivilege($privilege) {
		$this->privilege = $privilege;
		return $this;
	}
	
}


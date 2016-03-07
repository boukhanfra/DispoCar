<?php

namespace AbonnementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Privilege
 *
 * @ORM\Table(name="privilege")
 * @ORM\Entity(repositoryClass="AbonnementBundle\Repository\PrivilegeRepository")
 */
class Privilege
{

    /**
     * @var int
     *
     * @ORM\Column(name="idPrivilege", type="integer")
     */
    private $idPrivilege;

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
     * Set idPrivilege
     *
     * @param integer $idPrivilege
     *
     * @return Privilege
     */
    public function setIdPrivilege($idPrivilege)
    {
        $this->idPrivilege = $idPrivilege;

        return $this;
    }

    /**
     * Get idPrivilege
     *
     * @return int
     */
    public function getIdPrivilege()
    {
        return $this->idPrivilege;
    }
	public function getPrivilege() {
		return $this->privilege;
	}
	public function setPrivilege($privilege) {
		$this->privilege = $privilege;
		return $this;
	}
	
}


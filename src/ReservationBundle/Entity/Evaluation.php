<?php

namespace ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation")
 * @ORM\Entity(repositoryClass="ReservationBundle\Repository\EvaluationRepository")
 */
class Evaluation
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
     * @var int
     *
     * @ORM\Column(name="noteAgence", type="integer")
     */
    private $noteAgence;

    /**
     * @var int
     *
     * @ORM\Column(name="noteClient", type="integer")
     */
    private $noteClient;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaireClient", type="text", nullable=true)
     */
    private $commentaireClient;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaireAgence", type="text", nullable=true)
     */
    private $commentaireAgence;


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
     * Set idEvaluation
     *
     * @param integer $idEvaluation
     *
     * @return Evaluation
     */
    public function setIdEvaluation($idEvaluation)
    {
        $this->idEvaluation = $idEvaluation;

        return $this;
    }

    /**
     * Get idEvaluation
     *
     * @return int
     */
    public function getIdEvaluation()
    {
        return $this->idEvaluation;
    }

    /**
     * Set noteAgence
     *
     * @param integer $noteAgence
     *
     * @return Evaluation
     */
    public function setNoteAgence($noteAgence)
    {
        $this->noteAgence = $noteAgence;

        return $this;
    }

    /**
     * Get noteAgence
     *
     * @return int
     */
    public function getNoteAgence()
    {
        return $this->noteAgence;
    }

    /**
     * Set noteClient
     *
     * @param integer $noteClient
     *
     * @return Evaluation
     */
    public function setNoteClient($noteClient)
    {
        $this->noteClient = $noteClient;

        return $this;
    }

    /**
     * Get noteClient
     *
     * @return int
     */
    public function getNoteClient()
    {
        return $this->noteClient;
    }

    /**
     * Set commentaireClient
     *
     * @param string $commentaireClient
     *
     * @return Evaluation
     */
    public function setCommentaireClient($commentaireClient)
    {
        $this->commentaireClient = $commentaireClient;

        return $this;
    }

    /**
     * Get commentaireClient
     *
     * @return string
     */
    public function getCommentaireClient()
    {
        return $this->commentaireClient;
    }

    /**
     * Set commentaireAgence
     *
     * @param string $commentaireAgence
     *
     * @return Evaluation
     */
    public function setCommentaireAgence($commentaireAgence)
    {
        $this->commentaireAgence = $commentaireAgence;

        return $this;
    }

    /**
     * Get commentaireAgence
     *
     * @return string
     */
    public function getCommentaireAgence()
    {
        return $this->commentaireAgence;
    }
}


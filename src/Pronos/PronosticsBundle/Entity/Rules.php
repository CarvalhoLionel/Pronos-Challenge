<?php

namespace Pronos\PronosticsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rules
 *
 * @ORM\Table(name="rules")
 * @ORM\Entity(repositoryClass="Pronos\PronosticsBundle\Entity\Repository\RulesRepository")
 */
class Rules
{
    /**
     * @ORM\OneToOne(targetEntity="Pronos\PronosticsBundle\Entity\Championship", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $championship;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointsCorrectResult", type="integer", nullable=false)
     */
    private $pointsCorrectResult;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointsExactResult", type="integer", nullable=false)
     */
    private $pointsExactResult;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pointResultatCorrect
     *
     * @param integer $pointResultatCorrect
     * @return Regles
     */
    public function setPointResultatCorrect($pointResultatCorrect)
    {
        $this->pointResultatCorrect = $pointResultatCorrect;

        return $this;
    }

    /**
     * Get pointResultatCorrect
     *
     * @return integer 
     */
    public function getPointResultatCorrect()
    {
        return $this->pointResultatCorrect;
    }

    /**
     * Set pointResultatExact
     *
     * @param integer $pointResultatExact
     * @return Regles
     */
    public function setPointResultatExact($pointResultatExact)
    {
        $this->pointResultatExact = $pointResultatExact;

        return $this;
    }

    /**
     * Get pointResultatExact
     *
     * @return integer 
     */
    public function getPointResultatExact()
    {
        return $this->pointResultatExact;
    }

    /**
     * Set championnat
     *
     * @param \Pronos\PronosticsBundle\Entity\Championnat $championnat
     * @return Regles
     */
    public function setChampionnat(\Pronos\PronosticsBundle\Entity\Championnat $championnat = null)
    {
        $this->championnat = $championnat;

        return $this;
    }

    /**
     * Get championnat
     *
     * @return \Pronos\PronosticsBundle\Entity\Championnat 
     */
    public function getChampionnat()
    {
        return $this->championnat;
    }

    /**
     * Set pointsCorrectResult
     *
     * @param integer $pointsCorrectResult
     *
     * @return Rules
     */
    public function setPointsCorrectResult($pointsCorrectResult)
    {
        $this->pointsCorrectResult = $pointsCorrectResult;

        return $this;
    }

    /**
     * Get pointsCorrectResult
     *
     * @return integer
     */
    public function getPointsCorrectResult()
    {
        return $this->pointsCorrectResult;
    }

    /**
     * Set pointsExactResult
     *
     * @param integer $pointsExactResult
     *
     * @return Rules
     */
    public function setPointsExactResult($pointsExactResult)
    {
        $this->pointsExactResult = $pointsExactResult;

        return $this;
    }

    /**
     * Get pointsExactResult
     *
     * @return integer
     */
    public function getPointsExactResult()
    {
        return $this->pointsExactResult;
    }

    /**
     * Set championship
     *
     * @param \Pronos\PronosticsBundle\Entity\Championship $championship
     *
     * @return Rules
     */
    public function setChampionship(\Pronos\PronosticsBundle\Entity\Championship $championship = null)
    {
        $this->championship = $championship;

        return $this;
    }

    /**
     * Get championship
     *
     * @return \Pronos\PronosticsBundle\Entity\Championship
     */
    public function getChampionship()
    {
        return $this->championship;
    }
}

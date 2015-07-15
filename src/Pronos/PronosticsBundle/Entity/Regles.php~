<?php

namespace Pronos\PronosticsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regles
 *
 * @ORM\Table(name="regles")
 * @ORM\Entity(repositoryClass="Pronos\PronosticsBundle\Entity\Repository\ReglesRepository")
 */
class Regles
{
    /**
     * @ORM\OneToOne(targetEntity="Pronos\PronosticsBundle\Entity\Championnats", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $championnat;

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
     * @ORM\Column(name="pointResultatCorrect", type="integer", nullable=false)
     */
    private $pointResultatCorrect;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointResultatExact", type="integer", nullable=false)
     */
    private $pointResultatExact;


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
}

<?php

namespace Pronos\PronosticsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matchs
 *
 * @ORM\Table(name="matchs")
 * @ORM\Entity(repositoryClass="Pronos\PronosticsBundle\Entity\Repository\MatchsRepository")
 */
class Matchs
{
    /**
     * @ORM\ManyToOne(targetEntity="Pronos\PronosticsBundle\Entity\Championnats")
     * @ORM\JoinColumn(nullable=false)
     */
    private $championnat;

    /**
     * @ORM\ManyToOne(targetEntity="Pronos\PronosticsBundle\Entity\Journees")
     * @ORM\JoinColumn(nullable=true)
     */
    private $journee;

    /**
     * @ORM\ManyToOne(targetEntity="Pronos\PronosticsBundle\Entity\Equipes")
     * @ORM\JoinColumn(nullable=true)
     */
    private $equipeDomicile;

    /**
     * @ORM\ManyToOne(targetEntity="Pronos\PronosticsBundle\Entity\Equipes")
     * @ORM\JoinColumn(nullable=true)
     */
    private $equipeExterieur;

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
     * @ORM\Column(name="scoreEquipeDomicile", type="integer", nullable=true)
     */
    private $scoreEquipeDomicile;

    /**
     * @var integer
     *
     * @ORM\Column(name="scoreEquipeExterieur", type="integer", nullable=true)
     */
    private $scoreEquipeExterieur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMatch", type="datetime", nullable=true)
     */
    private $dateMatch;


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
     * Set scoreEquipeDomicile
     *
     * @param integer $scoreEquipeDomicile
     * @return Matchs
     */
    public function setScoreEquipeDomicile($scoreEquipeDomicile)
    {
        $this->scoreEquipeDomicile = $scoreEquipeDomicile;

        return $this;
    }

    /**
     * Get scoreEquipeDomicile
     *
     * @return integer 
     */
    public function getScoreEquipeDomicile()
    {
        return $this->scoreEquipeDomicile;
    }

    /**
     * Set scoreEquipeExterieur
     *
     * @param integer $scoreEquipeExterieur
     * @return Matchs
     */
    public function setScoreEquipeExterieur($scoreEquipeExterieur)
    {
        $this->scoreEquipeExterieur = $scoreEquipeExterieur;

        return $this;
    }

    /**
     * Get scoreEquipeExterieur
     *
     * @return integer 
     */
    public function getScoreEquipeExterieur()
    {
        return $this->scoreEquipeExterieur;
    }

    /**
     * Set dateMatch
     *
     * @param \DateTime $dateMatch
     * @return Matchs
     */
    public function setDateMatch($dateMatch)
    {
        $this->dateMatch = $dateMatch;

        return $this;
    }

    /**
     * Get dateMatch
     *
     * @return \DateTime 
     */
    public function getDateMatch()
    {
        return $this->dateMatch;
    }

    /**
     * Set championnat
     *
     * @param \Pronos\PronosticsBundle\Entity\Championnats $championnat
     * @return Matchs
     */
    public function setChampionnat(\Pronos\PronosticsBundle\Entity\Championnats $championnat)
    {
        $this->championnat = $championnat;

        return $this;
    }

    /**
     * Get championnat
     *
     * @return \Pronos\PronosticsBundle\Entity\Championnats 
     */
    public function getChampionnat()
    {
        return $this->championnat;
    }

    /**
     * Set journee
     *
     * @param \Pronos\PronosticsBundle\Entity\Journees $journee
     * @return Matchs
     */
    public function setJournee(\Pronos\PronosticsBundle\Entity\Journees $journee = null)
    {
        $this->journee = $journee;

        return $this;
    }

    /**
     * Get journee
     *
     * @return \Pronos\PronosticsBundle\Entity\Journees 
     */
    public function getJournee()
    {
        return $this->journee;
    }

    /**
     * Set equipeDomicile
     *
     * @param \Pronos\PronosticsBundle\Entity\Equipes $equipeDomicile
     * @return Matchs
     */
    public function setEquipeDomicile(\Pronos\PronosticsBundle\Entity\Equipes $equipeDomicile = null)
    {
        $this->equipeDomicile = $equipeDomicile;

        return $this;
    }

    /**
     * Get equipeDomicile
     *
     * @return \Pronos\PronosticsBundle\Entity\Equipes 
     */
    public function getEquipeDomicile()
    {
        return $this->equipeDomicile;
    }

    /**
     * Set equipeExterieur
     *
     * @param \Pronos\PronosticsBundle\Entity\Equipes $equipeExterieur
     * @return Matchs
     */
    public function setEquipeExterieur(\Pronos\PronosticsBundle\Entity\Equipes $equipeExterieur = null)
    {
        $this->equipeExterieur = $equipeExterieur;

        return $this;
    }

    /**
     * Get equipeExterieur
     *
     * @return \Pronos\PronosticsBundle\Entity\Equipes 
     */
    public function getEquipeExterieur()
    {
        return $this->equipeExterieur;
    }
}

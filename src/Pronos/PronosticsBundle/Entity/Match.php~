<?php

namespace Pronos\PronosticsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Match
 *
 * @ORM\Table(name="matchs")
 * @ORM\Entity(repositoryClass="Pronos\PronosticsBundle\Entity\Repository\MatchRepository")
 */
class Match
{
    /**
     * @ORM\ManyToOne(targetEntity="Pronos\PronosticsBundle\Entity\Championship")
     * @ORM\JoinColumn(nullable=false)
     */
    private $championship;

    /**
     * @ORM\ManyToOne(targetEntity="Pronos\PronosticsBundle\Entity\Daytime")
     * @ORM\JoinColumn(nullable=true)
     */
    private $daytime;

    /**
     * @ORM\ManyToOne(targetEntity="Pronos\PronosticsBundle\Entity\Team")
     * @ORM\JoinColumn(nullable=true)
     */
    private $homeTeam;

    /**
     * @ORM\ManyToOne(targetEntity="Pronos\PronosticsBundle\Entity\Team")
     * @ORM\JoinColumn(nullable=true)
     */
    private $awayTeam;

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
     * @ORM\Column(name="scoreHomeTeam", type="integer", nullable=true)
     */
    private $scoreHomeTeam;

    /**
     * @var integer
     *
     * @ORM\Column(name="scoreAwayTeam", type="integer", nullable=true)
     */
    private $scoreAwayTeam;

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
     * Set scoreHomeTeam
     *
     * @param integer $scoreHomeTeam
     *
     * @return Match
     */
    public function setScoreHomeTeam($scoreHomeTeam)
    {
        $this->scoreHomeTeam = $scoreHomeTeam;

        return $this;
    }

    /**
     * Get scoreHomeTeam
     *
     * @return integer
     */
    public function getScoreHomeTeam()
    {
        return $this->scoreHomeTeam;
    }

    /**
     * Set scoreAwayTeam
     *
     * @param integer $scoreAwayTeam
     *
     * @return Match
     */
    public function setScoreAwayTeam($scoreAwayTeam)
    {
        $this->scoreAwayTeam = $scoreAwayTeam;

        return $this;
    }

    /**
     * Get scoreAwayTeam
     *
     * @return integer
     */
    public function getScoreAwayTeam()
    {
        return $this->scoreAwayTeam;
    }

    /**
     * Set dateMatch
     *
     * @param \DateTime $dateMatch
     *
     * @return Match
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
     * Set championship
     *
     * @param \Pronos\PronosticsBundle\Entity\Championship $championship
     *
     * @return Match
     */
    public function setChampionship(\Pronos\PronosticsBundle\Entity\Championship $championship)
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

    /**
     * Set daytime
     *
     * @param \Pronos\PronosticsBundle\Entity\Daytime $daytime
     *
     * @return Match
     */
    public function setDaytime(\Pronos\PronosticsBundle\Entity\Daytime $daytime = null)
    {
        $this->daytime = $daytime;

        return $this;
    }

    /**
     * Get daytime
     *
     * @return \Pronos\PronosticsBundle\Entity\Daytime
     */
    public function getDaytime()
    {
        return $this->daytime;
    }

    /**
     * Set homeTeam
     *
     * @param \Pronos\PronosticsBundle\Entity\Team $homeTeam
     *
     * @return Match
     */
    public function setHomeTeam(\Pronos\PronosticsBundle\Entity\Team $homeTeam = null)
    {
        $this->homeTeam = $homeTeam;

        return $this;
    }

    /**
     * Get homeTeam
     *
     * @return \Pronos\PronosticsBundle\Entity\Team
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * Set awayTeam
     *
     * @param \Pronos\PronosticsBundle\Entity\Team $awayTeam
     *
     * @return Match
     */
    public function setAwayTeam(\Pronos\PronosticsBundle\Entity\Team $awayTeam = null)
    {
        $this->awayTeam = $awayTeam;

        return $this;
    }

    /**
     * Get awayTeam
     *
     * @return \Pronos\PronosticsBundle\Entity\Team
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }
}

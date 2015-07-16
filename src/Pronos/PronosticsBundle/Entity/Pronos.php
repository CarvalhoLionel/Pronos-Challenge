<?php

namespace Pronos\PronosticsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pronos
 *
 * @ORM\Table(name="pronos")
 * @ORM\Entity(repositoryClass="Pronos\PronosticsBundle\Entity\Repository\PronosRepository")
 */
class Pronos
{
    /**
     * @ORM\ManyToOne(targetEntity="Pronos\AuthBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Pronos\PronosticsBundle\Entity\Match")
     * @ORM\JoinColumn(nullable=false)
     */
    private $match;

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
     * @ORM\Column(name="scoreHomeTeam", type="integer")
     */
    private $scoreHomeTeam;

    /**
     * @var integer
     *
     * @ORM\Column(name="scoreAwayTeam", type="integer")
     */
    private $scoreAwayTeam;


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
     * @return Pronos
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
     * @return Pronos
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
     * Set user
     *
     * @param \Pronos\AuthBundle\Entity\User $user
     *
     * @return Pronos
     */
    public function setUser(\Pronos\AuthBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Pronos\AuthBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set match
     *
     * @param \Pronos\PronosticsBundle\Entity\Matchs $match
     *
     * @return Pronos
     */
    public function setMatch(\Pronos\PronosticsBundle\Entity\Matchs $match)
    {
        $this->match = $match;

        return $this;
    }

    /**
     * Get match
     *
     * @return \Pronos\PronosticsBundle\Entity\Matchs
     */
    public function getMatch()
    {
        return $this->match;
    }
}

<?php

namespace Pronos\PronosticsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Daytime
 *
 * @ORM\Table(name="daytime")
 * @ORM\Entity(repositoryClass="Pronos\PronosticsBundle\Entity\Repository\DaytimeRepository")
 */
class Daytime {
    /**
     * @ORM\ManyToOne(targetEntity="Pronos\PronosticsBundle\Entity\Championship")
     * @ORM\JoinColumn(nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=80, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="diminutive", type="string", length=50, nullable=true)
     */
    private $diminutive;


    public function __toString()
    {
        return $this->getName();
    }


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
     * Set name
     *
     * @param string $name
     *
     * @return Daytime
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set diminutive
     *
     * @param string $diminutive
     *
     * @return Daytime
     */
    public function setDiminutive($diminutive)
    {
        $this->diminutive = $diminutive;

        return $this;
    }

    /**
     * Get diminutive
     *
     * @return string
     */
    public function getDiminutive()
    {
        return $this->diminutive;
    }

    /**
     * Set championship
     *
     * @param \Pronos\PronosticsBundle\Entity\Championship $championship
     *
     * @return Daytime
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
}

<?php

namespace Pronos\PronosticsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Journees
 *
 * @ORM\Table(name="journees")
 * @ORM\Entity(repositoryClass="Pronos\PronosticsBundle\Entity\Repository\JourneesRepository")
 */
class Journees {
    /**
     * @ORM\ManyToOne(targetEntity="Pronos\PronosticsBundle\Entity\Championnats")
     * @ORM\JoinColumn(nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="diminutif", type="string", length=10, nullable=true)
     */
    private $diminutif;


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
     * Set nom
     *
     * @param string $nom
     * @return Journees
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set diminutif
     *
     * @param string $diminutif
     * @return Journees
     */
    public function setDiminutif($diminutif)
    {
        $this->diminutif = $diminutif;

        return $this;
    }

    /**
     * Get diminutif
     *
     * @return string 
     */
    public function getDiminutif()
    {
        return $this->diminutif;
    }

    /**
     * Set championnat
     *
     * @param \Pronos\PronosticsBundle\Entity\Championnats $championnat
     * @return Journees
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
}

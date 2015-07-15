<?php

namespace Pronos\PronosticsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipes
 *
 * @ORM\Table(name="equipes")
 * @ORM\Entity(repositoryClass="Pronos\PronosticsBundle\Entity\Repository\EquipesRepository")
 */
class Equipes
{
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
     * @ORM\Column(name="nom", type="string", length=80, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=120, nullable=true)
     */
    private $logo;


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
     * @return Equipes
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
     * Set logo
     *
     * @param string $logo
     * @return Equipes
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }
}

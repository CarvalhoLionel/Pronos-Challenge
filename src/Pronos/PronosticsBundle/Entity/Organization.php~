<?php
namespace Pronos\PronosticsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organization
 *
 * @ORM\Table(name="organization")
 * @ORM\Entity(repositoryClass="Pronos\PronosticsBundle\Entity\Repository\OrganizationRepository")
 */
class Organization
{
    /**
     * @ORM\ManyToMany(targetEntity="Pronos\AuthBundle\Entity\User")
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity="Pronos\PronosticsBundle\Entity\Championship")
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
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        $this->championship = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Organization
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
     * Add user
     *
     * @param \Pronos\AuthBundle\Entity\User $user
     *
     * @return Organization
     */
    public function addUser(\Pronos\AuthBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \Pronos\AuthBundle\Entity\User $user
     */
    public function removeUser(\Pronos\AuthBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add championship
     *
     * @param \Pronos\PronosticsBundle\Entity\Championship $championship
     *
     * @return Organization
     */
    public function addChampionship(\Pronos\PronosticsBundle\Entity\Championship $championship)
    {
        $this->championship[] = $championship;

        return $this;
    }

    /**
     * Remove championship
     *
     * @param \Pronos\PronosticsBundle\Entity\Championship $championship
     */
    public function removeChampionship(\Pronos\PronosticsBundle\Entity\Championship $championship)
    {
        $this->championship->removeElement($championship);
    }

    /**
     * Get championship
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChampionship()
    {
        return $this->championship;
    }
}

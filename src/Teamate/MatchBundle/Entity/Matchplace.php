<?php

namespace Teamate\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matchplace
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Teamate\MatchBundle\Entity\MatchplaceRepository")
 */
class Matchplace
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string")
     */
    private $type;

    /**
     * @var decimal
     *
     * @ORM\Column(name="price", type="decimal")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="Teamate\MatchBundle\Entity\Team")
     * @ORM\JoinColumn(nullable=false)
     */
    private $team;

    /**
     * @ORM\ManyToOne(targetEntity="Teamate\UserBundle\Entity\User")
     *
     */
    private $user;














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
     * Set type
     *
     * @param array $type
     * @return Matchplace
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return array 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Matchplace
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set team
     *
     * @param \Teamate\MatchBundle\Entity\Team $team
     * @return Matchplace
     */
    public function setTeam(\Teamate\MatchBundle\Entity\Team $team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return \Teamate\MatchBundle\Entity\Team 
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set user
     *
     * @param \Teamate\UserBundle\Entity\User $user
     * @return Matchplace
     */
    public function setUser(\Teamate\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Teamate\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}

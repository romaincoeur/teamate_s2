<?php

namespace Teamate\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * demand
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Teamate\MatchBundle\Entity\demandRepository")
 */
class demand
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
     * @ORM\Column(name="status", type="string")
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Teamate\MatchBundle\Entity\Game")
     * @ORM\JoinColumn(nullable=false)
     */
    private $game;

    /**
     * @ORM\ManyToOne(targetEntity="Teamate\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
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
     * Set status
     *
     * @param array $status
     * @return demand
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return array 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return demand
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set game
     *
     * @param \Teamate\MatchBundle\Entity\Game $game
     * @return demand
     */
    public function setGame(\Teamate\MatchBundle\Entity\Game $game)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return \Teamate\MatchBundle\Entity\Game 
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Set user
     *
     * @param \Teamate\UserBundle\Entity\User $user
     * @return demand
     */
    public function setUser(\Teamate\UserBundle\Entity\User $user)
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

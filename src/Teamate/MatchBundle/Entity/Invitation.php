<?php

namespace Teamate\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Teamate\MatchBundle\Entity\InvitationRepository")
 */
class Invitation
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
     * Set game
     *
     * @param \Teamate\MatchBundle\Entity\Game $game
     * @return Invitation
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
     * @return Invitation
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

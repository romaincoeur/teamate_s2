<?php

namespace Teamate\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Teamate\MatchBundle\Entity\GameRepository")
 */
class Game
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
     * @ORM\ManyToOne(targetEntity="Teamate\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $organiser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin_date", type="datetime")
     */
    private $beginDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime")
     */
    private $endDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="limit_date", type="datetime")
     */
    private $limitDate;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=255)
     */
    private $format;

    /**
     * @ORM\OneToOne(targetEntity="Teamate\MatchBundle\Entity\Team", cascade={"remove"})
     */
    private $team1;

    /**
     * @ORM\OneToOne(targetEntity="Teamate\MatchBundle\Entity\Team", cascade={"remove"})
     */
   private $team2;

    /**
     * @var decimal
     *
     * @ORM\Column(name="price_per_player", type="decimal")
     */
    private $pricePerPlayer;

    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=255)
     */
    private $mode;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_places", type="integer")
     */
    private $totalPlaces;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     * @ORM\ManyToOne(targetEntity="Teamate\GymBundle\Entity\pitch")
     *
     */
    private $pitch;



    public function __construct()
    {
        $this->beginDate = new \Datetime();
        $this->endDate = new \DateTime();
        $this->limitDate = new \DateTime();
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
     * Set organiser
     *
     * @param \stdClass $organiser
     * @return Game
     */
    public function setOrganiser($organiser)
    {
        $this->organiser = $organiser;

        return $this;
    }

    /**
     * Get organiser
     *
     * @return \stdClass 
     */
    public function getOrganiser()
    {
        return $this->organiser;
    }

    /**
     * Set beginDate
     *
     * @param \DateTime $beginDate
     * @return Game
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * Get beginDate
     *
     * @return \DateTime 
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Game
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set limitDate
     *
     * @param \DateTime $limitDate
     * @return Game
     */
    public function setLimitDate($limitDate)
    {
        $this->limitDate = $limitDate;

        return $this;
    }

    /**
     * Get limitDate
     *
     * @return \DateTime 
     */
    public function getLimitDate()
    {
        return $this->limitDate;
    }

    /**
     * Set place
     *
     * @param \stdClass $place
     * @return Game
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return \stdClass 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set format
     *
     * @param string $format
     * @return Game
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set team1
     *
     * @param \Teamate\MatchBundle\Entity\Team $team1
     * @return Game
     */
    public function setTeam1(\Teamate\MatchBundle\Entity\Team $team1 = null)
    {
        $this->team1 = $team1;

        return $this;
    }

    /**
     * Get team1
     *
     * @return \Teamate\MatchBundle\Entity\Team
     */
    public function getTeam1()
    {
        return $this->team1;
    }

    /**
     * Set team2
     *
     * @param \Teamate\MatchBundle\Entity\Team $team2
     * @return Game
     */
    public function setTeam2(\Teamate\MatchBundle\Entity\Team $team2 = null)
    {
        $this->team2 = $team2;

        return $this;
    }

    /**
     * Get team2
     *
     * @return \Teamate\MatchBundle\Entity\Team
     */
    public function getTeam2()
    {
        return $this->team2;
    }

    /**
     * Set comments
     *
     * @param \stdClass $comments
     * @return Game
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return \stdClass 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set pricePerPlayer
     *
     * @param array $pricePerPlayer
     * @return Game
     */
    public function setPricePerPlayer($pricePerPlayer)
    {
        $this->pricePerPlayer = $pricePerPlayer;

        return $this;
    }

    /**
     * Get pricePerPlayer
     *
     * @return array 
     */
    public function getPricePerPlayer()
    {
        return $this->pricePerPlayer;
    }

    /**
     * Set mode
     *
     * @param string $mode
     * @return Game
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return string 
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set totalPlaces
     *
     * @param integer $totalPlaces
     * @return Game
     */
    public function setTotalPlaces($totalPlaces)
    {
        $this->totalPlaces = $totalPlaces;

        return $this;
    }

    /**
     * Get totalPlaces
     *
     * @return integer 
     */
    public function getTotalPlaces()
    {
        return $this->totalPlaces;
    }

    /**
     * Set invitedPlayers
     *
     * @param \stdClass $invitedPlayers
     * @return Game
     */
    public function setInvitedPlayers($invitedPlayers)
    {
        $this->invitedPlayers = $invitedPlayers;

        return $this;
    }

    /**
     * Get invitedPlayers
     *
     * @return \stdClass 
     */
    public function getInvitedPlayers()
    {
        return $this->invitedPlayers;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Game
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }


    /**
     * Set pitch
     *
     * @param \Teamate\GymBundle\Entity\pitch $pitch
     * @return Game
     */
    public function setPitch(\Teamate\GymBundle\Entity\pitch $pitch = null)
    {
        $this->pitch = $pitch;

        return $this;
    }

    /**
     * Get pitch
     *
     * @return \Teamate\GymBundle\Entity\pitch 
     */
    public function getPitch()
    {
        return $this->pitch;
    }
}

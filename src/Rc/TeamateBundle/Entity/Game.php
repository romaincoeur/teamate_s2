<?php

namespace Rc\TeamateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 */
class Game
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $starts_at;

    /**
     * @var \DateTime
     */
    private $ends_at;

    /**
     * @var \DateTime
     */
    private $limiteDate;

    /**
     * @var boolean
     */
    private $is_activated;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var string
     */
    private $format;

    /**
     * @var integer
     */
    private $price;

    /**
     * @var string
     */
    private $reservationMode;

    /**
     * @var string
     */
    private $pitchType;

    /**
     * @var string
     */
    private $level;

    /**
     * @var \Rc\TeamateBundle\Entity\Terrain
     */
    private $terrain;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Game
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
     * Set starts_at
     *
     * @param \DateTime $startsAt
     * @return Game
     */
    public function setStartsAt($startsAt)
    {
        $this->starts_at = $startsAt;

        return $this;
    }

    /**
     * Get starts_at
     *
     * @return \DateTime 
     */
    public function getStartsAt()
    {
        return $this->starts_at;
    }

    /**
     * Set ends_at
     *
     * @param \DateTime $endsAt
     * @return Game
     */
    public function setEndsAt($endsAt)
    {
        $this->ends_at = $endsAt;

        return $this;
    }

    /**
     * Get ends_at
     *
     * @return \DateTime 
     */
    public function getEndsAt()
    {
        return $this->ends_at;
    }

    /**
     * Set is_activated
     *
     * @param boolean $isActivated
     * @return Game
     */
    public function setIsActivated($isActivated)
    {
        $this->is_activated = $isActivated;

        return $this;
    }

    /**
     * Get is_activated
     *
     * @return boolean 
     */
    public function getIsActivated()
    {
        return $this->is_activated;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Game
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Game
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
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
     * Set price
     *
     * @param integer $price
     * @return Game
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set reservationMode
     *
     * @param string $reservationMode
     * @return Game
     */
    public function setReservationMode($reservationMode)
    {
        $this->reservationMode = $reservationMode;

        return $this;
    }

    /**
     * Get reservationMode
     *
     * @return string 
     */
    public function getReservationMode()
    {
        return $this->reservationMode;
    }

    /**
     * Set pitchType
     *
     * @param string $pitchType
     * @return Game
     */
    public function setPitchType($pitchType)
    {
        $this->pitchType = $pitchType;

        return $this;
    }

    /**
     * Get pitchType
     *
     * @return string 
     */
    public function getPitchType()
    {
        return $this->pitchType;
    }

    /**
     * Set level
     *
     * @param string $level
     * @return Game
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set terrain
     *
     * @param \Rc\TeamateBundle\Entity\Terrain $terrain
     * @return Game
     */
    public function setTerrain(\Rc\TeamateBundle\Entity\Terrain $terrain = null)
    {
        $this->terrain = $terrain;

        return $this;
    }

    /**
     * Get terrain
     *
     * @return \Rc\TeamateBundle\Entity\Terrain 
     */
    public function getTerrain()
    {
        return $this->terrain;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        if(!$this->getCreatedAt())
        {
            $this->created_at = new \DateTime();
        }
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->updated_at = new \DateTime();
    }

    public static function getReservationModes()
    {
        return array('confirmation' => 'Sur confirmation', 'illico' => 'Illico');
    }

    public static function getReservationModeValues()
    {
        return array_keys(self::getreservationModes());
    }

    public static function getLevels()
    {
        return array('0' => 'Débutant', '1' => 'Confirmé', '2' => 'Expert', '3' => 'Tous niveaux');
    }

    public static function getLevelValues()
    {
        return array_keys(self::getLevels());
    }

    public static function getFormats()
    {
        return array('5' => '5 vs 5', '7' => '7 vs 7', '11' => '11 vs 11', '2' => '2 vs 2');
    }

    public static function getFormatValues()
    {
        return array_keys(self::getFormats());
    }

    public static function getPitchTypes()
    {
        return array('indoor' => 'Intérieur', 'outdoor' => 'Extérieur');
    }

    public static function getPitchTypeValues()
    {
        return array_keys(self::getPitchTypes());
    }
    /**
     * @var \DateTime
     */
    private $limitDate;


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
}

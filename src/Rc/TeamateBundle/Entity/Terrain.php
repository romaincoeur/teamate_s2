<?php

namespace Rc\TeamateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terrain
 */
class Terrain
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $managerName;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $phone;

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
    private $address;

    /**
     * @var string
     */
    private $latitude;

    /**
     * @var string
     */
    private $longitude;

    /**
     * @var string
     */
    private $priceScale;

    /**
     * @var boolean
     */
    private $casiers;

    /**
     * @var boolean
     */
    private $showers;

    /**
     * @var boolean
     */
    private $parking;

    /**
     * @var boolean
     */
    private $restaurant;

    /**
     * @var boolean
     */
    private $bar;

    /**
     * @var boolean
     */
    private $vestiaires;

    /**
     * @var integer
     */
    private $nbPitches;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $games;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->games = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Terrain
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
     * Set city
     *
     * @param string $city
     * @return Terrain
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Terrain
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set managerName
     *
     * @param string $managerName
     * @return Terrain
     */
    public function setManagerName($managerName)
    {
        $this->managerName = $managerName;

        return $this;
    }

    /**
     * Get managerName
     *
     * @return string 
     */
    public function getManagerName()
    {
        return $this->managerName;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Terrain
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Terrain
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set is_activated
     *
     * @param boolean $isActivated
     * @return Terrain
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
     * @return Terrain
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
     * @return Terrain
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
     * Set address
     *
     * @param string $address
     * @return Terrain
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Terrain
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Terrain
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set priceScale
     *
     * @param string $priceScale
     * @return Terrain
     */
    public function setPriceScale($priceScale)
    {
        $this->priceScale = $priceScale;

        return $this;
    }

    /**
     * Get priceScale
     *
     * @return string 
     */
    public function getPriceScale()
    {
        return $this->priceScale;
    }

    /**
     * Set casiers
     *
     * @param boolean $casiers
     * @return Terrain
     */
    public function setCasiers($casiers)
    {
        $this->casiers = $casiers;

        return $this;
    }

    /**
     * Get casiers
     *
     * @return boolean 
     */
    public function getCasiers()
    {
        return $this->casiers;
    }

    /**
     * Set showers
     *
     * @param boolean $showers
     * @return Terrain
     */
    public function setShowers($showers)
    {
        $this->showers = $showers;

        return $this;
    }

    /**
     * Get showers
     *
     * @return boolean 
     */
    public function getShowers()
    {
        return $this->showers;
    }

    /**
     * Set parking
     *
     * @param boolean $parking
     * @return Terrain
     */
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Get parking
     *
     * @return boolean 
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set restaurant
     *
     * @param boolean $restaurant
     * @return Terrain
     */
    public function setRestaurant($restaurant)
    {
        $this->restaurant = $restaurant;

        return $this;
    }

    /**
     * Get restaurant
     *
     * @return boolean 
     */
    public function getRestaurant()
    {
        return $this->restaurant;
    }

    /**
     * Set bar
     *
     * @param boolean $bar
     * @return Terrain
     */
    public function setBar($bar)
    {
        $this->bar = $bar;

        return $this;
    }

    /**
     * Get bar
     *
     * @return boolean 
     */
    public function getBar()
    {
        return $this->bar;
    }

    /**
     * Set vestiaires
     *
     * @param boolean $vestiaires
     * @return Terrain
     */
    public function setVestiaires($vestiaires)
    {
        $this->vestiaires = $vestiaires;

        return $this;
    }

    /**
     * Get vestiaires
     *
     * @return boolean 
     */
    public function getVestiaires()
    {
        return $this->vestiaires;
    }

    /**
     * Set nbPitches
     *
     * @param integer $nbPitches
     * @return Terrain
     */
    public function setNbPitches($nbPitches)
    {
        $this->nbPitches = $nbPitches;

        return $this;
    }

    /**
     * Get nbPitches
     *
     * @return integer 
     */
    public function getNbPitches()
    {
        return $this->nbPitches;
    }

    /**
     * Add games
     *
     * @param \Rc\TeamateBundle\Entity\Game $games
     * @return Terrain
     */
    public function addGame(\Rc\TeamateBundle\Entity\Game $games)
    {
        $this->games[] = $games;

        return $this;
    }

    /**
     * Remove games
     *
     * @param \Rc\TeamateBundle\Entity\Game $games
     */
    public function removeGame(\Rc\TeamateBundle\Entity\Game $games)
    {
        $this->games->removeElement($games);
    }

    /**
     * Get games
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGames()
    {
        return $this->games;
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
    /**
     * @var string
     */
    private $postcode;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $country;


    /**
     * Set postcode
     *
     * @param string $postcode
     * @return Terrain
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Terrain
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Terrain
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * @var integer
     */
    private $old_id;


    /**
     * Set old_id
     *
     * @param integer $oldId
     * @return Terrain
     */
    public function setOldId($oldId)
    {
        $this->old_id = $oldId;

        return $this;
    }

    /**
     * Get old_id
     *
     * @return integer 
     */
    public function getOldId()
    {
        return $this->old_id;
    }

    public function __toString()
    {
        return $this->getName();
    }
    /**
     * @var string
     */
    private $comment;


    /**
     * Set comment
     *
     * @param string $comment
     * @return Terrain
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
}

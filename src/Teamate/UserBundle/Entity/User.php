<?php

namespace Teamate\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Teamate\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Teamate\PagesBundle\Entity\Image", cascade={"remove"})
     */
    private $avatar;

    /**
     * @ORM\ManyToMany(targetEntity="Teamate\UserBundle\Entity\User", cascade={"persist"})
     */
    private $favoritePlayers;
    











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
     * Set avatar
     *
     * @param \Teamate\PagesBundle\Entity\Image $avatar
     * @return User
     */
    public function setAvatar(\Teamate\PagesBundle\Entity\Image $avatar = null)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return \Teamate\PagesBundle\Entity\Image 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->favoritePlayers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add favoritePlayers
     *
     * @param \Teamate\UserBundle\Entity\User $favoritePlayers
     * @return User
     */
    public function addFavoritePlayer(\Teamate\UserBundle\Entity\User $favoritePlayers)
    {
        $this->favoritePlayers[] = $favoritePlayers;

        return $this;
    }

    /**
     * Remove favoritePlayers
     *
     * @param \Teamate\UserBundle\Entity\User $favoritePlayers
     */
    public function removeFavoritePlayer(\Teamate\UserBundle\Entity\User $favoritePlayers)
    {
        $this->favoritePlayers->removeElement($favoritePlayers);
    }

    /**
     * Get favoritePlayers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFavoritePlayers()
    {
        return $this->favoritePlayers;
    }
}

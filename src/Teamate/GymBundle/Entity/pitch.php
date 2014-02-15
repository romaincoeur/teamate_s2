<?php

namespace Teamate\GymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pitch
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Teamate\GymBundle\Entity\pitchRepository")
 */
class pitch
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
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=255)
     */
    private $format;

    /**
     * @ORM\ManyToOne(targetEntity="Teamate\GymBundle\Entity\sportcenter")
     *
     */
    private $sportcenter;

















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
     * Set reference
     *
     * @param string $reference
     * @return pitch
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return pitch
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set format
     *
     * @param string $format
     * @return pitch
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
     * Set sportcenter
     *
     * @param \Teamate\GymBundle\Entity\sportcenter $sportcenter
     * @return pitch
     */
    public function setSportcenter(\Teamate\GymBundle\Entity\sportcenter $sportcenter = null)
    {
        $this->sportcenter = $sportcenter;

        return $this;
    }

    /**
     * Get sportcenter
     *
     * @return \Teamate\GymBundle\Entity\sportcenter 
     */
    public function getSportcenter()
    {
        return $this->sportcenter;
    }
}

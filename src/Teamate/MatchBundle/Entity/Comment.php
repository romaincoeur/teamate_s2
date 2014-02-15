<?php

namespace Teamate\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Teamate\MatchBundle\Entity\CommentRepository")
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Teamate\MatchBundle\Entity\Game")
     */
    private $game;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Teamate\UserBundle\Entity\User")
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;



















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
     * Set title
     *
     * @param string $title
     * @return Comment
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set game
     *
     * @param \Teamate\MatchBundle\Entity\Game $game
     * @return Comment
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
     * Set author
     *
     * @param \Teamate\UserBundle\Entity\User $author
     * @return Comment
     */
    public function setAuthor(\Teamate\UserBundle\Entity\User $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \Teamate\UserBundle\Entity\User 
     */
    public function getAuthor()
    {
        return $this->author;
    }
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Submission
 */
class Submission
{
    /**
     * @var int
     * @Groups({"user", "challenge", "submission"})
     */
    private $id;

    /**
     * @var string
     * @Groups({"user", "challenge", "submission"})
     */
    private $title;

    /**
     * @var \DateTime
     * @Groups({"user", "challenge", "submission"})
     */
    private $submittedAt;

    /**
     * @var \DateTime
     * @Groups({"user", "challenge", "submission"})
     */
    private $updatedAt;

    /**
     * @var string
     * @Groups({"user", "challenge", "submission"})
     */
    private $link;

    /**
     * @var int
     * @Groups({"user", "challenge", "submission"})
     */
    private $score;

    /**
     * @var string
     * @Groups({"user", "challenge", "submission"})
     */
    private $description;

    /**
     * @var \AppBundle\Entity\Challenge
     * @Groups({"user", "submission"})
     */
    private $challenge;

    /**
     * @var \AppBundle\Entity\User
     * @Groups({"user", "challenge", "submission"})
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
     * Set title
     *
     * @param string $title
     * @return Submission
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
     * Set submittedAt
     *
     * @param \DateTime $submittedAt
     * @return Submission
     */
    public function setSubmittedAt($submittedAt)
    {
        $this->submittedAt = $submittedAt;

        return $this;
    }

    /**
     * Get submittedAt
     *
     * @return \DateTime 
     */
    public function getSubmittedAt()
    {
        return $this->submittedAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Submission
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Submission
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
     * Set score
     *
     * @param integer $score
     * @return Submission
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Submission
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set challenge
     *
     * @param \AppBundle\Entity\Challenge $challenge
     * @return Submission
     */
    public function setChallenge(\AppBundle\Entity\Challenge $challenge = null)
    {
        $this->challenge = $challenge;

        return $this;
    }

    /**
     * Get challenge
     *
     * @return \AppBundle\Entity\Challenge 
     */
    public function getChallenge()
    {
        return $this->challenge;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Submission
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}

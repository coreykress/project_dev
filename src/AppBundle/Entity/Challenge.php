<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * Challenge
 */
class Challenge
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
    private $createdAt;

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
     * @var string
     * @Groups({"user", "challenge", "submission"})
     */
    private $description;

    /**
     * @var \DateTime
     * @Groups({"user", "challenge", "submission"})
     */
    private $endsAt;

    /**
     * @var array
     * @Groups({"user", "challenge", "submission"})
     */
    private $tags;

    /**
     * @var \AppBundle\Entity\User
     * @Groups({"user", "challenge", "submission"})
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @Groups({"user", "challenge"})
     */
    private $submissions;

    public function __construct()
    {
        $dateTime = date_create();
        $this->setCreatedAt($dateTime);
        $this->setUpdatedAt($dateTime);
        $this->submissions = new ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Challenge
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Challenge
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Challenge
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function setUpdatedAtValue()
    {
        $this->setUpdatedAt(date_create());

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
     * @return Challenge
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
     * Set description
     *
     * @param string $description
     * @return Challenge
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
     * Set endsAt
     *
     * @param \DateTime $endsAt
     * @return Challenge
     */
    public function setEndsAt($endsAt)
    {
        $this->endsAt = $endsAt;

        return $this;
    }

    /**
     * Get endsAt
     *
     * @return \DateTime 
     */
    public function getEndsAt()
    {
        return $this->endsAt;
    }

    /**
     * Set tags
     *
     * @param array $tags
     * @return Challenge
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return array 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Add submissions
     *
     * @param Submission $submissions
     * @return Challenge
     */
    public function addSubmission(Submission $submissions)
    {
        $this->submissions[] = $submissions;

        return $this;
    }

    /**
     * Remove submissions
     *
     * @param Submission $submissions
     */
    public function removeSubmission(Submission $submissions)
    {
        $this->submissions->removeElement($submissions);
    }

    /**
     * Get submissions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubmissions()
    {
        return $this->submissions;
    }

    /**
     * Set user
     *
     * @param User $user
     * @return Challenge
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
}

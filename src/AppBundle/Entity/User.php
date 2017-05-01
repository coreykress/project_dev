<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * User
 */
class User implements \JsonSerializable
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
    private $firstName;

    /**
     * @var string
     * @Groups({"user", "challenge", "submission"})
     */
    private $lastName;

    /**
     * @var string
     * @Groups({"user", "challenge", "submission"})
     */
    private $userName;

    /**
     * @var string
     * @Groups({"user", "challenge", "submission"})
     */
    private $email;

    /**
     * @var string
     * @Groups({"user", "challenge", "submission"})
     */
    private $password;

    /**
     * @var string
     * @Groups({"user", "challenge", "submission"})
     */
    private $salt;

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
     * @var boolean
     * @Groups({"user", "challenge", "submission"})
     */
    private $isAdmin;

    public function __construct()
    {
        $dateTime = date_create();

        $this->createdAt = $dateTime;
        $this->updatedAt = $dateTime;
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
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return User
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
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
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return User
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
     * @return User
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
     * Set isAdmin
     *
     * @param boolean $isAdmin
     * @return User
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return boolean 
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    function jsonSerialize()
    {
        return (object) get_object_vars($this);
    }
}

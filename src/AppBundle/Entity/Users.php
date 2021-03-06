<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class Users 
{
	/**
	 * @ORM\Column(type="string", length=50)
	 * @ORM\Id
	 */
	private $username;
	/**
	 * @ORM\Column(type="string", length=32)
	 */
	private $password;
	/**
	 * @ORM\Column(type="string", length=5)
	 */
	private $salt;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	private $email;
	/**
	 * @ORM\Column(type="text")
	 */
	private $profile;
	// One user can write many posts 
	/**
	 * @ORM\OneToMany(targetEntity="Posts", mappedBy="user")
	 */
	private $posts;

	public function __construct()
	{
		$this->posts = new ArrayCollection();
	}

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
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
     *
     * @return Users
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
     * Set email
     *
     * @param string $email
     *
     * @return Users
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
     * Set profile
     *
     * @param string $profile
     *
     * @return Users
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Add post
     *
     * @param \AppBundle\Entity\Posts $post
     *
     * @return Users
     */
    public function addPost(\AppBundle\Entity\Posts $post)
    {
        $this->posts[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \AppBundle\Entity\Posts $post
     */
    public function removePost(\AppBundle\Entity\Posts $post)
    {
        $this->posts->removeElement($post);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->posts;
    }
}

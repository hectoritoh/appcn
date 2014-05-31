<?php

namespace Celmedia\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Usuario
 */
class Usuario extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    

    /**
     * Set id
     *
     * @param string $id
     * @return Usuario
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
   
    
    /**
     * @var string
     */
    private $facebook_id;

    /**
     * @var string
     */
    private $facebook_access_token;


    /**
     * Set facebook_id
     *
     * @param string $facebookId
     * @return Usuario
     */
    public function setFacebookId($facebookId)
    {
        $this->facebook_id = $facebookId;

        return $this;
    }

    /**
     * Get facebook_id
     *
     * @return string 
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * Set facebook_access_token
     *
     * @param string $facebookAccessToken
     * @return Usuario
     */
    public function setFacebookAccessToken($facebookAccessToken)
    {
        $this->facebook_access_token = $facebookAccessToken;

        return $this;
    }

    /**
     * Get facebook_access_token
     *
     * @return string 
     */
    public function getFacebookAccessToken()
    {
        return $this->facebook_access_token;
    }
    /**
     * @var string
     */
    private $first_name;

    /**
     * @var string
     */
    private $last_name;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $name;


    /**
     * Set first_name
     *
     * @param string $firstName
     * @return Usuario
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return Usuario
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Usuario
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Usuario
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
     * Set name
     *
     * @param string $name
     * @return Usuario
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
     * @var string
     */
    private $twitter_id;

    /**
     * @var string
     */
    private $twitter_access_token;


    /**
     * Set twitter_id
     *
     * @param string $twitterId
     * @return Usuario
     */
    public function setTwitterId($twitterId)
    {
        $this->twitter_id = $twitterId;

        return $this;
    }

    /**
     * Get twitter_id
     *
     * @return string 
     */
    public function getTwitterId()
    {
        return $this->twitter_id;
    }

    /**
     * Set twitter_access_token
     *
     * @param string $twitterAccessToken
     * @return Usuario
     */
    public function setTwitterAccessToken($twitterAccessToken)
    {
        $this->twitter_access_token = $twitterAccessToken;

        return $this;
    }

    /**
     * Get twitter_access_token
     *
     * @return string 
     */
    public function getTwitterAccessToken()
    {
        return $this->twitter_access_token;
    }
    
    
    /**
     * @var boolean
     */
    private $verificado;


    /**
     * Set verificado
     *
     * @param boolean $verificado
     * @return Usuario
     */
    public function setVerificado($verificado)
    {
        $this->verificado = $verificado;

        return $this;
    }

    /**
     * Get verificado
     *
     * @return boolean 
     */
    public function getVerificado()
    {
        return $this->verificado;
    }
}

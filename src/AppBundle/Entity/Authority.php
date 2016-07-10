<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Authority
 *
 * @ORM\Table(name="authority")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AuthorityRepository")
 */
class Authority
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var ArrayCollection $locations
     * @ORM\OneToMany(targetEntity="Location", mappedBy="authority", cascade={"persist", "remove", "merge"})
     */
    private $locations;
     /**
     * @var int
     *
     * @ORM\Column(name="phone", type="integer")
     */
 
     
    private $phone;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="context", type="smallint")
     */
    private $context;

    /**
     * @var string
     *
     * @ORM\Column(name="hqAdress", type="string", length=255)
     */
    private $hqAdress;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;
    
    public function __construct() {
        $this->locations=new ArrayCollection();
        
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
     * @return Authority
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
     * Set context
     *
     * @param integer $context
     * @return Authority
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return integer 
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set hqAdress
     *
     * @param string $hqAdress
     * @return Authority
     */
    public function setHqAdress($hqAdress)
    {
        $this->hqAdress = $hqAdress;

        return $this;
    }

    /**
     * Get hqAdress
     *
     * @return string 
     */
    public function getHqAdress()
    {
        return $this->hqAdress;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Authority
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
     * Set url
     *
     * @param string $url
     * @return Authority
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Authority
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
     * Add locations
     *
     * @param \AppBundle\Entity\Location $locations
     * @return Authority
     */
    public function addLocation(\AppBundle\Entity\Location $locations)
    {
        $this->locations[] = $locations;

        return $this;
    }

    /**
     * Remove locations
     *
     * @param \AppBundle\Entity\Location $locations
     */
    public function removeLocation(\AppBundle\Entity\Location $locations)
    {
        $this->locations->removeElement($locations);
    }

    /**
     * Get locations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLocations()
    {
        return $this->locations;
    }

   

   

   
    public function __toString() {
            return $this->getName().'-'.$this->getId()  ;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     * @return Authority
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }
}

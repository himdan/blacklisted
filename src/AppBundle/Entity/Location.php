<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Location
 *
 * @ORM\Table(name="location")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LocationRepository")
 */
class Location
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
     * @var ArrayCollection $resolutions
     * @ORM\OneToMany(targetEntity="Resolution", mappedBy="location", cascade={"persist", "remove", "merge"})
     */
    private $resolutions;
    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string")
     */
    private $label;
    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string")
     */
    private $firstname;
    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string")
     */
    private $lastname;
    /**
     * @var Authority $authority
     *
     * @ORM\ManyToOne(targetEntity="Authority", inversedBy="locations", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="authority_location", referencedColumnName="id")
     * })
     */
    private $authority;
    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;
     /**
     * @var string
     *
     * @ORM\Column(name="address", type="string")
     */
    private $address;
     /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer")
     */
      private $telephone;
     /**
     * @var int
     *
     * @ORM\Column(name="mobile", type="integer")
     */
      private $mobile; 
     /**
     * @var int
     *
     * @ORM\Column(name="fax", type="integer")
     */
      private $fax; 
    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text")
     */
    private $info;
   

    public function __construct() {
        $this->resolutions=new ArrayCollection();
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
     * Set longitude
     *
     * @param float $longitude
     * @return Location
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Location
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return Location
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set authority
     *
     * @param \AppBundle\Entity\Authority $authority
     * @return Location
     */
    public function setAuthority(\AppBundle\Entity\Authority $authority = null)
    {
        $this->authority = $authority;

        return $this;
    }

    /**
     * Get authority
     *
     * @return \AppBundle\Entity\Authority 
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * Set name
     *
     * @param string $firstname
     * @return Location
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    public function __toString() {
        return $this->getAuthority()->getName().'-'.$this->getLabel().'-'.$this->getId();
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Location
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Location
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Location
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
     * Set telephone
     *
     * @param integer $telephone
     * @return Location
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mobile
     *
     * @param integer $mobile
     * @return Location
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return integer 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set fax
     *
     * @param integer $fax
     * @return Location
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return integer 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Add resolutions
     *
     * @param \AppBundle\Entity\Resolution $resolutions
     * @return Location
     */
    public function addResolution(\AppBundle\Entity\Resolution $resolutions)
    {
        $this->resolutions[] = $resolutions;

        return $this;
    }

    /**
     * Remove resolutions
     *
     * @param \AppBundle\Entity\Resolution $resolutions
     */
    public function removeResolution(\AppBundle\Entity\Resolution $resolutions)
    {
        $this->resolutions->removeElement($resolutions);
    }

    /**
     * Get resolutions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResolutions()
    {
        return $this->resolutions;
    }
}

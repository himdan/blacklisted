<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Claim
 *
 * @ORM\Table(name="claim")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClaimRepository")
 */
class Claim
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
     * @var ServiceLocation $location
     * @ORM\OneToOne(targetEntity="ServiceLocation", mappedBy="claim")
     */
    private $location;
    /**
     * @var Category $category
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="claims", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="claim_category", referencedColumnName="id")
     * })
     */
    private $category;
    /**
     * @var Account $account
     *
     * @ORM\ManyToOne(targetEntity="Account", inversedBy="claims", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="account_claim", referencedColumnName="id")
     * })
     */
    private $account;
    /**
     * @var ArrayCollection $medias
     * @ORM\OneToMany(targetEntity="Media", mappedBy="claim", cascade={"persist", "remove", "merge"})
     */
    private $medias;
    /**
     * @var ArrayCollection $resolutions
     * @ORM\OneToMany(targetEntity="Resolution", mappedBy="claim", cascade={"persist", "remove", "merge"})
     */
    private $resolutions;
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    /**
     * @var boolean
     *
     * @ORM\Column(name="isService", type="boolean")
     */
    private $isservice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;
    
    public function __construct()
    {
        $this->createdAt=new \DateTime("now");
        $this->medias=new ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Claim
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
     * Set description
     *
     * @param string $description
     * @return Claim
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Claim
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
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     * @return Claim
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set account
     *
     * @param \AppBundle\Entity\Account $account
     * @return Claim
     */
    public function setAccount(\AppBundle\Entity\Account $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \AppBundle\Entity\Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Add medias
     *
     * @param \AppBundle\Entity\Media $medias
     * @return Claim
     */
    public function addMedia(\AppBundle\Entity\Media $medias)
    {
        $this->medias[] = $medias;

        return $this;
    }

    /**
     * Remove medias
     *
     * @param \AppBundle\Entity\Media $medias
     */
    public function removeMedia(\AppBundle\Entity\Media $medias)
    {
        $this->medias->removeElement($medias);
    }

    /**
     * Get medias
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedias()
    {
        return $this->medias;
    }

    /**
     * Add resolutions
     *
     * @param \AppBundle\Entity\Resolution $resolutions
     * @return Claim
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

    /**
     * @return bool
     */
    public function getIsService()
    {
        return $this->isservice;
    }
    public function setIsService($isService = null)
    {
        $this->isservice= is_null($isService)?false:true;
        return $this;
    }
    public function isOwnedBy(Account $account)
    {
        if ($this->account instanceof Account) {
            return $this->account->getId()==$account->getId();
        } else {
            return false;
        }
    }
    public function isLocated()
    {
        return $this->location instanceof ServiceLocation;
    }
    public function __toString()
    {
        return $this->getTitle().'-'.$this->getId();
    }

    /**
     * Set location
     *
     * @param \AppBundle\Entity\ServiceLocation $location
     * @return Claim
     */
    public function setLocation(\AppBundle\Entity\ServiceLocation $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \AppBundle\Entity\ServiceLocation
     */
    public function getLocation()
    {
        return $this->location;
    }
}

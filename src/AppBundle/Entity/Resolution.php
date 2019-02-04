<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resolution
 *
 * @ORM\Table(name="resolution")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResolutionRepository")
 */
class Resolution
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
     * @var Location $location
     *
     * @ORM\ManyToOne(targetEntity="Location", inversedBy="resolutions", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="location", referencedColumnName="id")
     * })
     */
    private $location;
    /**
     * @var Claim $claim
     *
     * @ORM\ManyToOne(targetEntity="Claim", inversedBy="resolutions", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="claim", referencedColumnName="id")
     * })
     */
    private $claim;
    /**
     * @var int
     *
     * @ORM\Column(name="status", type="smallint")
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="solvedAt", type="datetime", nullable=true)
     */
    private $solvedAt;

    public function __construct()
    {
        $this->createdAt=new \DateTime("now");
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
     * Set status
     *
     * @param integer $status
     * @return Resolution
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Resolution
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
     * Set solvedAt
     *
     * @param \DateTime $solvedAt
     * @return Resolution
     */
    public function setSolvedAt($solvedAt)
    {
        $this->solvedAt = $solvedAt;

        return $this;
    }

    /**
     * Get solvedAt
     *
     * @return \DateTime
     */
    public function getSolvedAt()
    {
        return $this->solvedAt;
    }

  

   
    /**
     * Set claim
     *
     * @param \AppBundle\Entity\Claim $claim
     * @return Resolution
     */
    public function setClaim(\AppBundle\Entity\Claim $claim = null)
    {
        $this->claim = $claim;

        return $this;
    }

    /**
     * Get claim
     *
     * @return \AppBundle\Entity\Claim
     */
    public function getClaim()
    {
        return $this->claim;
    }
    public function __toString()
    {
        return $this->getId();
    }

    /**
     * Set location
     *
     * @param \AppBundle\Entity\Location $location
     * @return Resolution
     */
    public function setLocation(\AppBundle\Entity\Location $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \AppBundle\Entity\Location
     */
    public function getLocation()
    {
        return $this->location;
    }
}

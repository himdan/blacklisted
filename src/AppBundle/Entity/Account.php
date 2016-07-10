<?php

namespace AppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table(name="account")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccountRepository")
 */
class Account extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string
     *
     * @ORM\Column(name="apikey", type="string", length=255,unique=true,nullable=false)
     */
    protected $apikey;
    /**
     * @var ArrayCollection $claims
     * @ORM\OneToMany(targetEntity="Claim", mappedBy="account", cascade={"persist", "remove", "merge"})
     */
    
    private $claims;
  


    /**
     * Get id
     *
     * @return integer 
     */
    public function __construct() {
        parent::__construct();
        $this->claims=new ArrayCollection();
        $this->apikey=md5(uniqid(null, true));
    }
    public function getId()
    {
        return $this->id;
    }
    /**
     * 
     * @return string
     */
    public function getApiKey(){
        return $this->apikey;
        
    }
    /**
     * Add claims
     *
     * @param \AppBundle\Entity\Claim $claims
     * @return Account
     */
    public function addClaim(\AppBundle\Entity\Claim $claims)
    {
        $this->claims[] = $claims;

        return $this;
    }

    /**
     * Remove claims
     *
     * @param \AppBundle\Entity\Claim $claims
     */
    public function removeClaim(\AppBundle\Entity\Claim $claims)
    {
        $this->claims->removeElement($claims);
    }

    /**
     * Get claims
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClaims()
    {
        return $this->claims;
    }
    public function __toString() {
            return $this->getUsername();
    }

    /**
     * Set apikey
     *
     * @param string $apikey
     * @return Account
     */
    public function setApikey($apikey)
    {
        $this->apikey = $apikey;

        return $this;
    }
}

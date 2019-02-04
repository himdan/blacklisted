<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Claim extends \AppBundle\Entity\Claim implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'location', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'category', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'account', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'medias', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'resolutions', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'isservice', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'createdAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'location', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'category', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'account', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'medias', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'resolutions', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'isservice', '' . "\0" . 'AppBundle\\Entity\\Claim' . "\0" . 'createdAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Claim $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\AppBundle\Entity\Category $category = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccount(\AppBundle\Entity\Account $account = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccount', [$account]);

        return parent::setAccount($account);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccount', []);

        return parent::getAccount();
    }

    /**
     * {@inheritDoc}
     */
    public function addMedia(\AppBundle\Entity\Media $medias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMedia', [$medias]);

        return parent::addMedia($medias);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMedia(\AppBundle\Entity\Media $medias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMedia', [$medias]);

        return parent::removeMedia($medias);
    }

    /**
     * {@inheritDoc}
     */
    public function getMedias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedias', []);

        return parent::getMedias();
    }

    /**
     * {@inheritDoc}
     */
    public function addResolution(\AppBundle\Entity\Resolution $resolutions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addResolution', [$resolutions]);

        return parent::addResolution($resolutions);
    }

    /**
     * {@inheritDoc}
     */
    public function removeResolution(\AppBundle\Entity\Resolution $resolutions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeResolution', [$resolutions]);

        return parent::removeResolution($resolutions);
    }

    /**
     * {@inheritDoc}
     */
    public function getResolutions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResolutions', []);

        return parent::getResolutions();
    }

    /**
     * {@inheritDoc}
     */
    public function getIsService()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsService', []);

        return parent::getIsService();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsService()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsService', []);

        return parent::setIsService();
    }

    /**
     * {@inheritDoc}
     */
    public function isOwnedBy(\AppBundle\Entity\Account $account)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isOwnedBy', [$account]);

        return parent::isOwnedBy($account);
    }

    /**
     * {@inheritDoc}
     */
    public function isLocated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLocated', []);

        return parent::isLocated();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocation(\AppBundle\Entity\ServiceLocation $location = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocation', [$location]);

        return parent::setLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocation', []);

        return parent::getLocation();
    }

}
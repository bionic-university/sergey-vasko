<?php

namespace Proxies\__CG__\BionicUniversity\SergeyVasko\JobmagazineBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Job extends \BionicUniversity\SergeyVasko\JobmagazineBundle\Entity\Job implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'id', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'type', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'company', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'logo', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'url', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'position', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'location', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'description', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'how_to_apply', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'token', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'is_public', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'is_activated', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'email', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'expires_at', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'created_at', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'updated_at', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'category');
        }

        return array('__isInitialized__', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'id', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'type', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'company', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'logo', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'url', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'position', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'location', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'description', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'how_to_apply', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'token', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'is_public', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'is_activated', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'email', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'expires_at', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'created_at', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'updated_at', '' . "\0" . 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Entity\\Job' . "\0" . 'category');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Job $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompany($company)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompany', array($company));

        return parent::setCompany($company);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompany()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompany', array());

        return parent::getCompany();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogo($logo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogo', array($logo));

        return parent::setLogo($logo);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogo', array());

        return parent::getLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', array($url));

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', array());

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', array($position));

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', array());

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocation($location)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocation', array($location));

        return parent::setLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocation', array());

        return parent::getLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setHowToApply($howToApply)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHowToApply', array($howToApply));

        return parent::setHowToApply($howToApply);
    }

    /**
     * {@inheritDoc}
     */
    public function getHowToApply()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHowToApply', array());

        return parent::getHowToApply();
    }

    /**
     * {@inheritDoc}
     */
    public function setToken($token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', array($token));

        return parent::setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToken', array());

        return parent::getToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublic($isPublic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublic', array($isPublic));

        return parent::setIsPublic($isPublic);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublic', array());

        return parent::getIsPublic();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActivated($isActivated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActivated', array($isActivated));

        return parent::setIsActivated($isActivated);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActivated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActivated', array());

        return parent::getIsActivated();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpiresAt($expiresAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpiresAt', array($expiresAt));

        return parent::setExpiresAt($expiresAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpiresAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpiresAt', array());

        return parent::getExpiresAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\BionicUniversity\SergeyVasko\JobmagazineBundle\Entity\Category $category = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', array($category));

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', array());

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAtValue', array());

        return parent::setCreatedAtValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAtValue', array());

        return parent::setUpdatedAtValue();
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanySlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanySlug', array());

        return parent::getCompanySlug();
    }

    /**
     * {@inheritDoc}
     */
    public function getPositionSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPositionSlug', array());

        return parent::getPositionSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function getLocationSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocationSlug', array());

        return parent::getLocationSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpiresAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpiresAtValue', array());

        return parent::setExpiresAtValue();
    }

}

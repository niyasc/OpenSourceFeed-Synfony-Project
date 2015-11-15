<?php

namespace Proxies\__CG__\OpenSource\FeedBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Post extends \OpenSource\FeedBundle\Entity\Post implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'id', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'slug', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'title', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'date', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'preText', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'postText', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'summary', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'link', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'category', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'comments');
        }

        return array('__isInitialized__', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'id', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'slug', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'title', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'date', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'preText', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'postText', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'summary', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'link', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'category', '' . "\0" . 'OpenSource\\FeedBundle\\Entity\\Post' . "\0" . 'comments');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Post $proxy) {
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
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreText($preText)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreText', array($preText));

        return parent::setPreText($preText);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreText', array());

        return parent::getPreText();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostText($postText)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostText', array($postText));

        return parent::setPostText($postText);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostText', array());

        return parent::getPostText();
    }

    /**
     * {@inheritDoc}
     */
    public function setSummary($summary)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSummary', array($summary));

        return parent::setSummary($summary);
    }

    /**
     * {@inheritDoc}
     */
    public function getSummary()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSummary', array());

        return parent::getSummary();
    }

    /**
     * {@inheritDoc}
     */
    public function setLink($link)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLink', array($link));

        return parent::setLink($link);
    }

    /**
     * {@inheritDoc}
     */
    public function getLink()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLink', array());

        return parent::getLink();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category)
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', array($slug));

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', array());

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function addComment(\OpenSource\FeedBundle\Entity\Comment $comment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComment', array($comment));

        return parent::addComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComment(\OpenSource\FeedBundle\Entity\Comment $comment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComment', array($comment));

        return parent::removeComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function getComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', array());

        return parent::getComments();
    }

    /**
     * {@inheritDoc}
     */
    public function slugify($text)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'slugify', array($text));

        return parent::slugify($text);
    }

}

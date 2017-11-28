<?php

namespace AppBundle\Entity;

/**
 * WpAiowpsEvents
 */
class WpAiowpsEvents
{
    /**
     * @var string
     */
    private $eventType = '';

    /**
     * @var string
     */
    private $username;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \DateTime
     */
    private $eventDate = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $ipOrHost;

    /**
     * @var string
     */
    private $refererInfo;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $eventData;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set eventType
     *
     * @param string $eventType
     *
     * @return WpAiowpsEvents
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Get eventType
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return WpAiowpsEvents
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
     * Set userId
     *
     * @param integer $userId
     *
     * @return WpAiowpsEvents
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set eventDate
     *
     * @param \DateTime $eventDate
     *
     * @return WpAiowpsEvents
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Get eventDate
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Set ipOrHost
     *
     * @param string $ipOrHost
     *
     * @return WpAiowpsEvents
     */
    public function setIpOrHost($ipOrHost)
    {
        $this->ipOrHost = $ipOrHost;

        return $this;
    }

    /**
     * Get ipOrHost
     *
     * @return string
     */
    public function getIpOrHost()
    {
        return $this->ipOrHost;
    }

    /**
     * Set refererInfo
     *
     * @param string $refererInfo
     *
     * @return WpAiowpsEvents
     */
    public function setRefererInfo($refererInfo)
    {
        $this->refererInfo = $refererInfo;

        return $this;
    }

    /**
     * Get refererInfo
     *
     * @return string
     */
    public function getRefererInfo()
    {
        return $this->refererInfo;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return WpAiowpsEvents
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
     * Set eventData
     *
     * @param string $eventData
     *
     * @return WpAiowpsEvents
     */
    public function setEventData($eventData)
    {
        $this->eventData = $eventData;

        return $this;
    }

    /**
     * Get eventData
     *
     * @return string
     */
    public function getEventData()
    {
        return $this->eventData;
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
}


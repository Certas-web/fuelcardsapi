<?php

namespace AppBundle\Entity;

/**
 * WpRgLead
 */
class WpRgLead
{
    /**
     * @var integer
     */
    private $formId;

    /**
     * @var integer
     */
    private $postId;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var boolean
     */
    private $isStarred = '0';

    /**
     * @var boolean
     */
    private $isRead = '0';

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $sourceUrl = '';

    /**
     * @var string
     */
    private $userAgent = '';

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $paymentStatus;

    /**
     * @var \DateTime
     */
    private $paymentDate;

    /**
     * @var string
     */
    private $paymentAmount;

    /**
     * @var string
     */
    private $paymentMethod;

    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var boolean
     */
    private $isFulfilled;

    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var boolean
     */
    private $transactionType;

    /**
     * @var string
     */
    private $status = 'active';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set formId
     *
     * @param integer $formId
     *
     * @return WpRgLead
     */
    public function setFormId($formId)
    {
        $this->formId = $formId;

        return $this;
    }

    /**
     * Get formId
     *
     * @return integer
     */
    public function getFormId()
    {
        return $this->formId;
    }

    /**
     * Set postId
     *
     * @param integer $postId
     *
     * @return WpRgLead
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get postId
     *
     * @return integer
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return WpRgLead
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set isStarred
     *
     * @param boolean $isStarred
     *
     * @return WpRgLead
     */
    public function setIsStarred($isStarred)
    {
        $this->isStarred = $isStarred;

        return $this;
    }

    /**
     * Get isStarred
     *
     * @return boolean
     */
    public function getIsStarred()
    {
        return $this->isStarred;
    }

    /**
     * Set isRead
     *
     * @param boolean $isRead
     *
     * @return WpRgLead
     */
    public function setIsRead($isRead)
    {
        $this->isRead = $isRead;

        return $this;
    }

    /**
     * Get isRead
     *
     * @return boolean
     */
    public function getIsRead()
    {
        return $this->isRead;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return WpRgLead
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set sourceUrl
     *
     * @param string $sourceUrl
     *
     * @return WpRgLead
     */
    public function setSourceUrl($sourceUrl)
    {
        $this->sourceUrl = $sourceUrl;

        return $this;
    }

    /**
     * Get sourceUrl
     *
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->sourceUrl;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     *
     * @return WpRgLead
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set currency
     *
     * @param string $currency
     *
     * @return WpRgLead
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set paymentStatus
     *
     * @param string $paymentStatus
     *
     * @return WpRgLead
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * Get paymentStatus
     *
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Set paymentDate
     *
     * @param \DateTime $paymentDate
     *
     * @return WpRgLead
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    /**
     * Get paymentDate
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Set paymentAmount
     *
     * @param string $paymentAmount
     *
     * @return WpRgLead
     */
    public function setPaymentAmount($paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;

        return $this;
    }

    /**
     * Get paymentAmount
     *
     * @return string
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * Set paymentMethod
     *
     * @param string $paymentMethod
     *
     * @return WpRgLead
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get paymentMethod
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set transactionId
     *
     * @param string $transactionId
     *
     * @return WpRgLead
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * Get transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Set isFulfilled
     *
     * @param boolean $isFulfilled
     *
     * @return WpRgLead
     */
    public function setIsFulfilled($isFulfilled)
    {
        $this->isFulfilled = $isFulfilled;

        return $this;
    }

    /**
     * Get isFulfilled
     *
     * @return boolean
     */
    public function getIsFulfilled()
    {
        return $this->isFulfilled;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return WpRgLead
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set transactionType
     *
     * @param boolean $transactionType
     *
     * @return WpRgLead
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;

        return $this;
    }

    /**
     * Get transactionType
     *
     * @return boolean
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return WpRgLead
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
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


<?php

namespace AppBundle\Entity;

/**
 * WpRgIncompleteSubmissions
 */
class WpRgIncompleteSubmissions
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $formId;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $sourceUrl;

    /**
     * @var string
     */
    private $submission;

    /**
     * @var string
     */
    private $uuid;


    /**
     * Set email
     *
     * @param string $email
     *
     * @return WpRgIncompleteSubmissions
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
     * Set formId
     *
     * @param integer $formId
     *
     * @return WpRgIncompleteSubmissions
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
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return WpRgIncompleteSubmissions
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
     * Set ip
     *
     * @param string $ip
     *
     * @return WpRgIncompleteSubmissions
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
     * @return WpRgIncompleteSubmissions
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
     * Set submission
     *
     * @param string $submission
     *
     * @return WpRgIncompleteSubmissions
     */
    public function setSubmission($submission)
    {
        $this->submission = $submission;

        return $this;
    }

    /**
     * Get submission
     *
     * @return string
     */
    public function getSubmission()
    {
        return $this->submission;
    }

    /**
     * Get uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }
}


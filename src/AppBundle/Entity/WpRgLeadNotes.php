<?php

namespace AppBundle\Entity;

/**
 * WpRgLeadNotes
 */
class WpRgLeadNotes
{
    /**
     * @var integer
     */
    private $leadId;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $noteType;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set leadId
     *
     * @param integer $leadId
     *
     * @return WpRgLeadNotes
     */
    public function setLeadId($leadId)
    {
        $this->leadId = $leadId;

        return $this;
    }

    /**
     * Get leadId
     *
     * @return integer
     */
    public function getLeadId()
    {
        return $this->leadId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return WpRgLeadNotes
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return WpRgLeadNotes
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
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return WpRgLeadNotes
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
     * Set value
     *
     * @param string $value
     *
     * @return WpRgLeadNotes
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set noteType
     *
     * @param string $noteType
     *
     * @return WpRgLeadNotes
     */
    public function setNoteType($noteType)
    {
        $this->noteType = $noteType;

        return $this;
    }

    /**
     * Get noteType
     *
     * @return string
     */
    public function getNoteType()
    {
        return $this->noteType;
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


<?php

namespace AppBundle\Entity;

/**
 * ApiUsers
 */
class ApiUsers
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $business;

    /**
     * @var string
     */
    private $jobTitle;

    /**
     * @var string
     */
    private $contactNo;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return ApiUsers
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return ApiUsers
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
     * Set business
     *
     * @param string $business
     *
     * @return ApiUsers
     */
    public function setBusiness($business)
    {
        $this->business = $business;

        return $this;
    }

    /**
     * Get business
     *
     * @return string
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     *
     * @return ApiUsers
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * Get jobTitle
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set contactNo
     *
     * @param string $contactNo
     *
     * @return ApiUsers
     */
    public function setContactNo($contactNo)
    {
        $this->contactNo = $contactNo;

        return $this;
    }

    /**
     * Get contactNo
     *
     * @return string
     */
    public function getContactNo()
    {
        return $this->contactNo;
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


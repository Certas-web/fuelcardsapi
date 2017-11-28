<?php

namespace AppBundle\Entity;

/**
 * WpAiowpsFailedLogins
 */
class WpAiowpsFailedLogins
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $userLogin;

    /**
     * @var \DateTime
     */
    private $failedLoginDate = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $loginAttemptIp = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return WpAiowpsFailedLogins
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
     * Set userLogin
     *
     * @param string $userLogin
     *
     * @return WpAiowpsFailedLogins
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;

        return $this;
    }

    /**
     * Get userLogin
     *
     * @return string
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }

    /**
     * Set failedLoginDate
     *
     * @param \DateTime $failedLoginDate
     *
     * @return WpAiowpsFailedLogins
     */
    public function setFailedLoginDate($failedLoginDate)
    {
        $this->failedLoginDate = $failedLoginDate;

        return $this;
    }

    /**
     * Get failedLoginDate
     *
     * @return \DateTime
     */
    public function getFailedLoginDate()
    {
        return $this->failedLoginDate;
    }

    /**
     * Set loginAttemptIp
     *
     * @param string $loginAttemptIp
     *
     * @return WpAiowpsFailedLogins
     */
    public function setLoginAttemptIp($loginAttemptIp)
    {
        $this->loginAttemptIp = $loginAttemptIp;

        return $this;
    }

    /**
     * Get loginAttemptIp
     *
     * @return string
     */
    public function getLoginAttemptIp()
    {
        return $this->loginAttemptIp;
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


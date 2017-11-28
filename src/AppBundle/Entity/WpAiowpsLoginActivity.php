<?php

namespace AppBundle\Entity;

/**
 * WpAiowpsLoginActivity
 */
class WpAiowpsLoginActivity
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
    private $loginDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $logoutDate = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $loginIp = '';

    /**
     * @var string
     */
    private $loginCountry = '';

    /**
     * @var string
     */
    private $browserType = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return WpAiowpsLoginActivity
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
     * @return WpAiowpsLoginActivity
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
     * Set loginDate
     *
     * @param \DateTime $loginDate
     *
     * @return WpAiowpsLoginActivity
     */
    public function setLoginDate($loginDate)
    {
        $this->loginDate = $loginDate;

        return $this;
    }

    /**
     * Get loginDate
     *
     * @return \DateTime
     */
    public function getLoginDate()
    {
        return $this->loginDate;
    }

    /**
     * Set logoutDate
     *
     * @param \DateTime $logoutDate
     *
     * @return WpAiowpsLoginActivity
     */
    public function setLogoutDate($logoutDate)
    {
        $this->logoutDate = $logoutDate;

        return $this;
    }

    /**
     * Get logoutDate
     *
     * @return \DateTime
     */
    public function getLogoutDate()
    {
        return $this->logoutDate;
    }

    /**
     * Set loginIp
     *
     * @param string $loginIp
     *
     * @return WpAiowpsLoginActivity
     */
    public function setLoginIp($loginIp)
    {
        $this->loginIp = $loginIp;

        return $this;
    }

    /**
     * Get loginIp
     *
     * @return string
     */
    public function getLoginIp()
    {
        return $this->loginIp;
    }

    /**
     * Set loginCountry
     *
     * @param string $loginCountry
     *
     * @return WpAiowpsLoginActivity
     */
    public function setLoginCountry($loginCountry)
    {
        $this->loginCountry = $loginCountry;

        return $this;
    }

    /**
     * Get loginCountry
     *
     * @return string
     */
    public function getLoginCountry()
    {
        return $this->loginCountry;
    }

    /**
     * Set browserType
     *
     * @param string $browserType
     *
     * @return WpAiowpsLoginActivity
     */
    public function setBrowserType($browserType)
    {
        $this->browserType = $browserType;

        return $this;
    }

    /**
     * Get browserType
     *
     * @return string
     */
    public function getBrowserType()
    {
        return $this->browserType;
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


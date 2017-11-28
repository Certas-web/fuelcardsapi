<?php

namespace AppBundle\Entity;

/**
 * WpAiowpsLoginLockdown
 */
class WpAiowpsLoginLockdown
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
    private $lockdownDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $releaseDate = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $failedLoginIp = '';

    /**
     * @var string
     */
    private $lockReason = '';

    /**
     * @var string
     */
    private $unlockKey = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return WpAiowpsLoginLockdown
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
     * @return WpAiowpsLoginLockdown
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
     * Set lockdownDate
     *
     * @param \DateTime $lockdownDate
     *
     * @return WpAiowpsLoginLockdown
     */
    public function setLockdownDate($lockdownDate)
    {
        $this->lockdownDate = $lockdownDate;

        return $this;
    }

    /**
     * Get lockdownDate
     *
     * @return \DateTime
     */
    public function getLockdownDate()
    {
        return $this->lockdownDate;
    }

    /**
     * Set releaseDate
     *
     * @param \DateTime $releaseDate
     *
     * @return WpAiowpsLoginLockdown
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set failedLoginIp
     *
     * @param string $failedLoginIp
     *
     * @return WpAiowpsLoginLockdown
     */
    public function setFailedLoginIp($failedLoginIp)
    {
        $this->failedLoginIp = $failedLoginIp;

        return $this;
    }

    /**
     * Get failedLoginIp
     *
     * @return string
     */
    public function getFailedLoginIp()
    {
        return $this->failedLoginIp;
    }

    /**
     * Set lockReason
     *
     * @param string $lockReason
     *
     * @return WpAiowpsLoginLockdown
     */
    public function setLockReason($lockReason)
    {
        $this->lockReason = $lockReason;

        return $this;
    }

    /**
     * Get lockReason
     *
     * @return string
     */
    public function getLockReason()
    {
        return $this->lockReason;
    }

    /**
     * Set unlockKey
     *
     * @param string $unlockKey
     *
     * @return WpAiowpsLoginLockdown
     */
    public function setUnlockKey($unlockKey)
    {
        $this->unlockKey = $unlockKey;

        return $this;
    }

    /**
     * Get unlockKey
     *
     * @return string
     */
    public function getUnlockKey()
    {
        return $this->unlockKey;
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


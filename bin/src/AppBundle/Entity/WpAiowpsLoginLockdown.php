<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpAiowpsLoginLockdown
 *
 * @ORM\Table(name="wp_aiowps_login_lockdown")
 * @ORM\Entity
 */
class WpAiowpsLoginLockdown
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_login", type="string", length=150, nullable=false)
     */
    private $userLogin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lockdown_date", type="datetime", nullable=false)
     */
    private $lockdownDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="release_date", type="datetime", nullable=false)
     */
    private $releaseDate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="failed_login_ip", type="string", length=100, nullable=false)
     */
    private $failedLoginIp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lock_reason", type="string", length=128, nullable=false)
     */
    private $lockReason = '';

    /**
     * @var string
     *
     * @ORM\Column(name="unlock_key", type="string", length=128, nullable=false)
     */
    private $unlockKey = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}


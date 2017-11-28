<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpAiowpsFailedLogins
 *
 * @ORM\Table(name="wp_aiowps_failed_logins")
 * @ORM\Entity
 */
class WpAiowpsFailedLogins
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
     * @ORM\Column(name="failed_login_date", type="datetime", nullable=false)
     */
    private $failedLoginDate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="login_attempt_ip", type="string", length=100, nullable=false)
     */
    private $loginAttemptIp = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}


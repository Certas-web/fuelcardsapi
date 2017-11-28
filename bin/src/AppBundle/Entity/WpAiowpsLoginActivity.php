<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpAiowpsLoginActivity
 *
 * @ORM\Table(name="wp_aiowps_login_activity")
 * @ORM\Entity
 */
class WpAiowpsLoginActivity
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
     * @ORM\Column(name="login_date", type="datetime", nullable=false)
     */
    private $loginDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="logout_date", type="datetime", nullable=false)
     */
    private $logoutDate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="login_ip", type="string", length=100, nullable=false)
     */
    private $loginIp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="login_country", type="string", length=150, nullable=false)
     */
    private $loginCountry = '';

    /**
     * @var string
     *
     * @ORM\Column(name="browser_type", type="string", length=150, nullable=false)
     */
    private $browserType = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}


<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpAiowpsEvents
 *
 * @ORM\Table(name="wp_aiowps_events")
 * @ORM\Entity
 */
class WpAiowpsEvents
{
    /**
     * @var string
     *
     * @ORM\Column(name="event_type", type="string", length=150, nullable=false)
     */
    private $eventType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=150, nullable=true)
     */
    private $username;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=true)
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="event_date", type="datetime", nullable=false)
     */
    private $eventDate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_or_host", type="string", length=100, nullable=true)
     */
    private $ipOrHost;

    /**
     * @var string
     *
     * @ORM\Column(name="referer_info", type="string", length=255, nullable=true)
     */
    private $refererInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="event_data", type="text", nullable=true)
     */
    private $eventData;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}


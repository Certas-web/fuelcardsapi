<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpAiowpsGlobalMeta
 *
 * @ORM\Table(name="wp_aiowps_global_meta")
 * @ORM\Entity
 */
class WpAiowpsGlobalMeta
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time", type="datetime", nullable=false)
     */
    private $dateTime = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="meta_key1", type="string", length=255, nullable=false)
     */
    private $metaKey1;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_key2", type="string", length=255, nullable=false)
     */
    private $metaKey2;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_key3", type="string", length=255, nullable=false)
     */
    private $metaKey3;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_key4", type="string", length=255, nullable=false)
     */
    private $metaKey4;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_key5", type="string", length=255, nullable=false)
     */
    private $metaKey5;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_value1", type="string", length=255, nullable=false)
     */
    private $metaValue1;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_value2", type="text", length=65535, nullable=false)
     */
    private $metaValue2;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_value3", type="text", length=65535, nullable=false)
     */
    private $metaValue3;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_value4", type="text", nullable=false)
     */
    private $metaValue4;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_value5", type="text", nullable=false)
     */
    private $metaValue5;

    /**
     * @var integer
     *
     * @ORM\Column(name="meta_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $metaId;


}


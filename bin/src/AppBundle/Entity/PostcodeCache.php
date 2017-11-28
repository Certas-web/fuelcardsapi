<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostcodeCache
 *
 * @ORM\Table(name="postcode_cache")
 * @ORM\Entity
 */
class PostcodeCache
{
    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=7, nullable=false)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255, nullable=false)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255, nullable=false)
     */
    private $longitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}


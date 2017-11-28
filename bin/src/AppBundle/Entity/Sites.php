<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sites
 *
 * @ORM\Table(name="sites")
 * @ORM\Entity
 */
class Sites
{
    /**
     * @var string
     *
     * @ORM\Column(name="site_name", type="string", length=255, nullable=true)
     */
    private $siteName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="site_number", type="string", length=255, nullable=true)
     */
    private $siteNumber = '';

    /**
     * @var string
     *
     * @ORM\Column(name="network", type="string", length=255, nullable=true)
     */
    private $network = '';

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=255, nullable=true)
     */
    private $brand = '';

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location = '';

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address = '';

    /**
     * @var string
     *
     * @ORM\Column(name="address2", type="string", length=255, nullable=true)
     */
    private $address2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="address3", type="string", length=255, nullable=true)
     */
    private $address3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="address4", type="string", length=255, nullable=true)
     */
    private $address4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="address5", type="string", length=255, nullable=true)
     */
    private $address5 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=255, nullable=true)
     */
    private $postcode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, nullable=true)
     */
    private $tel = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="twentyfour", type="integer", nullable=true)
     */
    private $twentyfour = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="shop", type="integer", nullable=true)
     */
    private $shop = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="gas", type="integer", nullable=true)
     */
    private $gas = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="toilets", type="integer", nullable=true)
     */
    private $toilets = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="abbule", type="integer", nullable=true)
     */
    private $abbule = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lubricants", type="integer", nullable=true)
     */
    private $lubricants = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hgv", type="integer", nullable=true)
     */
    private $hgv = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hgv_lgv", type="integer", nullable=true)
     */
    private $hgvLgv = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lvc", type="integer", nullable=true)
     */
    private $lvc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=true)
     */
    private $img = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lat", type="string", length=255, nullable=true)
     */
    private $lat = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lng", type="string", length=255, nullable=true)
     */
    private $lng = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="location_type", type="string", length=200, nullable=true)
     */
    private $locationType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}


<?php

namespace AppBundle\Entity;

/**
 * Sites
 */
class Sites
{
    /**
     * @var string
     */
    private $siteName = '';

    /**
     * @var string
     */
    private $siteNumber = '';

    /**
     * @var string
     */
    private $network = '';

    /**
     * @var string
     */
    private $brand = '';

    /**
     * @var string
     */
    private $location = '';

    /**
     * @var string
     */
    private $address = '';

    /**
     * @var string
     */
    private $address2 = '';

    /**
     * @var string
     */
    private $address3 = '';

    /**
     * @var string
     */
    private $address4 = '';

    /**
     * @var string
     */
    private $address5 = '';

    /**
     * @var string
     */
    private $postcode = '';

    /**
     * @var string
     */
    private $tel = '';

    /**
     * @var integer
     */
    private $status = '0';

    /**
     * @var integer
     */
    private $twentyfour = '0';

    /**
     * @var integer
     */
    private $shop = '0';

    /**
     * @var integer
     */
    private $gas = '0';

    /**
     * @var integer
     */
    private $toilets = '0';

    /**
     * @var integer
     */
    private $abbule = '0';

    /**
     * @var integer
     */
    private $lubricants = '0';

    /**
     * @var integer
     */
    private $hgv = '0';

    /**
     * @var integer
     */
    private $hgvLgv = '0';

    /**
     * @var integer
     */
    private $lvc = '0';

    /**
     * @var string
     */
    private $img = '';

    /**
     * @var string
     */
    private $lat = '';

    /**
     * @var string
     */
    private $lng = '';

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $locationType;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set siteName
     *
     * @param string $siteName
     *
     * @return Sites
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;

        return $this;
    }

    /**
     * Get siteName
     *
     * @return string
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * Set siteNumber
     *
     * @param string $siteNumber
     *
     * @return Sites
     */
    public function setSiteNumber($siteNumber)
    {
        $this->siteNumber = $siteNumber;

        return $this;
    }

    /**
     * Get siteNumber
     *
     * @return string
     */
    public function getSiteNumber()
    {
        return $this->siteNumber;
    }

    /**
     * Set network
     *
     * @param string $network
     *
     * @return Sites
     */
    public function setNetwork($network)
    {
        $this->network = $network;

        return $this;
    }

    /**
     * Get network
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return Sites
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Sites
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Sites
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set address2
     *
     * @param string $address2
     *
     * @return Sites
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set address3
     *
     * @param string $address3
     *
     * @return Sites
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;

        return $this;
    }

    /**
     * Get address3
     *
     * @return string
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * Set address4
     *
     * @param string $address4
     *
     * @return Sites
     */
    public function setAddress4($address4)
    {
        $this->address4 = $address4;

        return $this;
    }

    /**
     * Get address4
     *
     * @return string
     */
    public function getAddress4()
    {
        return $this->address4;
    }

    /**
     * Set address5
     *
     * @param string $address5
     *
     * @return Sites
     */
    public function setAddress5($address5)
    {
        $this->address5 = $address5;

        return $this;
    }

    /**
     * Get address5
     *
     * @return string
     */
    public function getAddress5()
    {
        return $this->address5;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return Sites
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Sites
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Sites
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set twentyfour
     *
     * @param integer $twentyfour
     *
     * @return Sites
     */
    public function setTwentyfour($twentyfour)
    {
        $this->twentyfour = $twentyfour;

        return $this;
    }

    /**
     * Get twentyfour
     *
     * @return integer
     */
    public function getTwentyfour()
    {
        return $this->twentyfour;
    }

    /**
     * Set shop
     *
     * @param integer $shop
     *
     * @return Sites
     */
    public function setShop($shop)
    {
        $this->shop = $shop;

        return $this;
    }

    /**
     * Get shop
     *
     * @return integer
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Set gas
     *
     * @param integer $gas
     *
     * @return Sites
     */
    public function setGas($gas)
    {
        $this->gas = $gas;

        return $this;
    }

    /**
     * Get gas
     *
     * @return integer
     */
    public function getGas()
    {
        return $this->gas;
    }

    /**
     * Set toilets
     *
     * @param integer $toilets
     *
     * @return Sites
     */
    public function setToilets($toilets)
    {
        $this->toilets = $toilets;

        return $this;
    }

    /**
     * Get toilets
     *
     * @return integer
     */
    public function getToilets()
    {
        return $this->toilets;
    }

    /**
     * Set abbule
     *
     * @param integer $abbule
     *
     * @return Sites
     */
    public function setAbbule($abbule)
    {
        $this->abbule = $abbule;

        return $this;
    }

    /**
     * Get abbule
     *
     * @return integer
     */
    public function getAbbule()
    {
        return $this->abbule;
    }

    /**
     * Set lubricants
     *
     * @param integer $lubricants
     *
     * @return Sites
     */
    public function setLubricants($lubricants)
    {
        $this->lubricants = $lubricants;

        return $this;
    }

    /**
     * Get lubricants
     *
     * @return integer
     */
    public function getLubricants()
    {
        return $this->lubricants;
    }

    /**
     * Set hgv
     *
     * @param integer $hgv
     *
     * @return Sites
     */
    public function setHgv($hgv)
    {
        $this->hgv = $hgv;

        return $this;
    }

    /**
     * Get hgv
     *
     * @return integer
     */
    public function getHgv()
    {
        return $this->hgv;
    }

    /**
     * Set hgvLgv
     *
     * @param integer $hgvLgv
     *
     * @return Sites
     */
    public function setHgvLgv($hgvLgv)
    {
        $this->hgvLgv = $hgvLgv;

        return $this;
    }

    /**
     * Get hgvLgv
     *
     * @return integer
     */
    public function getHgvLgv()
    {
        return $this->hgvLgv;
    }

    /**
     * Set lvc
     *
     * @param integer $lvc
     *
     * @return Sites
     */
    public function setLvc($lvc)
    {
        $this->lvc = $lvc;

        return $this;
    }

    /**
     * Get lvc
     *
     * @return integer
     */
    public function getLvc()
    {
        return $this->lvc;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Sites
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set lat
     *
     * @param string $lat
     *
     * @return Sites
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param string $lng
     *
     * @return Sites
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return string
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Sites
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set locationType
     *
     * @param string $locationType
     *
     * @return Sites
     */
    public function setLocationType($locationType)
    {
        $this->locationType = $locationType;

        return $this;
    }

    /**
     * Get locationType
     *
     * @return string
     */
    public function getLocationType()
    {
        return $this->locationType;
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


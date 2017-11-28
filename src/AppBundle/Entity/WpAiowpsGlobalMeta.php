<?php

namespace AppBundle\Entity;

/**
 * WpAiowpsGlobalMeta
 */
class WpAiowpsGlobalMeta
{
    /**
     * @var \DateTime
     */
    private $dateTime = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $metaKey1;

    /**
     * @var string
     */
    private $metaKey2;

    /**
     * @var string
     */
    private $metaKey3;

    /**
     * @var string
     */
    private $metaKey4;

    /**
     * @var string
     */
    private $metaKey5;

    /**
     * @var string
     */
    private $metaValue1;

    /**
     * @var string
     */
    private $metaValue2;

    /**
     * @var string
     */
    private $metaValue3;

    /**
     * @var string
     */
    private $metaValue4;

    /**
     * @var string
     */
    private $metaValue5;

    /**
     * @var integer
     */
    private $metaId;


    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     *
     * @return WpAiowpsGlobalMeta
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set metaKey1
     *
     * @param string $metaKey1
     *
     * @return WpAiowpsGlobalMeta
     */
    public function setMetaKey1($metaKey1)
    {
        $this->metaKey1 = $metaKey1;

        return $this;
    }

    /**
     * Get metaKey1
     *
     * @return string
     */
    public function getMetaKey1()
    {
        return $this->metaKey1;
    }

    /**
     * Set metaKey2
     *
     * @param string $metaKey2
     *
     * @return WpAiowpsGlobalMeta
     */
    public function setMetaKey2($metaKey2)
    {
        $this->metaKey2 = $metaKey2;

        return $this;
    }

    /**
     * Get metaKey2
     *
     * @return string
     */
    public function getMetaKey2()
    {
        return $this->metaKey2;
    }

    /**
     * Set metaKey3
     *
     * @param string $metaKey3
     *
     * @return WpAiowpsGlobalMeta
     */
    public function setMetaKey3($metaKey3)
    {
        $this->metaKey3 = $metaKey3;

        return $this;
    }

    /**
     * Get metaKey3
     *
     * @return string
     */
    public function getMetaKey3()
    {
        return $this->metaKey3;
    }

    /**
     * Set metaKey4
     *
     * @param string $metaKey4
     *
     * @return WpAiowpsGlobalMeta
     */
    public function setMetaKey4($metaKey4)
    {
        $this->metaKey4 = $metaKey4;

        return $this;
    }

    /**
     * Get metaKey4
     *
     * @return string
     */
    public function getMetaKey4()
    {
        return $this->metaKey4;
    }

    /**
     * Set metaKey5
     *
     * @param string $metaKey5
     *
     * @return WpAiowpsGlobalMeta
     */
    public function setMetaKey5($metaKey5)
    {
        $this->metaKey5 = $metaKey5;

        return $this;
    }

    /**
     * Get metaKey5
     *
     * @return string
     */
    public function getMetaKey5()
    {
        return $this->metaKey5;
    }

    /**
     * Set metaValue1
     *
     * @param string $metaValue1
     *
     * @return WpAiowpsGlobalMeta
     */
    public function setMetaValue1($metaValue1)
    {
        $this->metaValue1 = $metaValue1;

        return $this;
    }

    /**
     * Get metaValue1
     *
     * @return string
     */
    public function getMetaValue1()
    {
        return $this->metaValue1;
    }

    /**
     * Set metaValue2
     *
     * @param string $metaValue2
     *
     * @return WpAiowpsGlobalMeta
     */
    public function setMetaValue2($metaValue2)
    {
        $this->metaValue2 = $metaValue2;

        return $this;
    }

    /**
     * Get metaValue2
     *
     * @return string
     */
    public function getMetaValue2()
    {
        return $this->metaValue2;
    }

    /**
     * Set metaValue3
     *
     * @param string $metaValue3
     *
     * @return WpAiowpsGlobalMeta
     */
    public function setMetaValue3($metaValue3)
    {
        $this->metaValue3 = $metaValue3;

        return $this;
    }

    /**
     * Get metaValue3
     *
     * @return string
     */
    public function getMetaValue3()
    {
        return $this->metaValue3;
    }

    /**
     * Set metaValue4
     *
     * @param string $metaValue4
     *
     * @return WpAiowpsGlobalMeta
     */
    public function setMetaValue4($metaValue4)
    {
        $this->metaValue4 = $metaValue4;

        return $this;
    }

    /**
     * Get metaValue4
     *
     * @return string
     */
    public function getMetaValue4()
    {
        return $this->metaValue4;
    }

    /**
     * Set metaValue5
     *
     * @param string $metaValue5
     *
     * @return WpAiowpsGlobalMeta
     */
    public function setMetaValue5($metaValue5)
    {
        $this->metaValue5 = $metaValue5;

        return $this;
    }

    /**
     * Get metaValue5
     *
     * @return string
     */
    public function getMetaValue5()
    {
        return $this->metaValue5;
    }

    /**
     * Get metaId
     *
     * @return integer
     */
    public function getMetaId()
    {
        return $this->metaId;
    }
}


<?php

namespace AppBundle\Entity;

/**
 * WpRgLeadMeta
 */
class WpRgLeadMeta
{
    /**
     * @var integer
     */
    private $formId = '0';

    /**
     * @var integer
     */
    private $leadId;

    /**
     * @var string
     */
    private $metaKey;

    /**
     * @var string
     */
    private $metaValue;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set formId
     *
     * @param integer $formId
     *
     * @return WpRgLeadMeta
     */
    public function setFormId($formId)
    {
        $this->formId = $formId;

        return $this;
    }

    /**
     * Get formId
     *
     * @return integer
     */
    public function getFormId()
    {
        return $this->formId;
    }

    /**
     * Set leadId
     *
     * @param integer $leadId
     *
     * @return WpRgLeadMeta
     */
    public function setLeadId($leadId)
    {
        $this->leadId = $leadId;

        return $this;
    }

    /**
     * Get leadId
     *
     * @return integer
     */
    public function getLeadId()
    {
        return $this->leadId;
    }

    /**
     * Set metaKey
     *
     * @param string $metaKey
     *
     * @return WpRgLeadMeta
     */
    public function setMetaKey($metaKey)
    {
        $this->metaKey = $metaKey;

        return $this;
    }

    /**
     * Get metaKey
     *
     * @return string
     */
    public function getMetaKey()
    {
        return $this->metaKey;
    }

    /**
     * Set metaValue
     *
     * @param string $metaValue
     *
     * @return WpRgLeadMeta
     */
    public function setMetaValue($metaValue)
    {
        $this->metaValue = $metaValue;

        return $this;
    }

    /**
     * Get metaValue
     *
     * @return string
     */
    public function getMetaValue()
    {
        return $this->metaValue;
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


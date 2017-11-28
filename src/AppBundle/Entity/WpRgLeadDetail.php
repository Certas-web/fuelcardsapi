<?php

namespace AppBundle\Entity;

/**
 * WpRgLeadDetail
 */
class WpRgLeadDetail
{
    /**
     * @var integer
     */
    private $leadId;

    /**
     * @var integer
     */
    private $formId;

    /**
     * @var float
     */
    private $fieldNumber;

    /**
     * @var string
     */
    private $value;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set leadId
     *
     * @param integer $leadId
     *
     * @return WpRgLeadDetail
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
     * Set formId
     *
     * @param integer $formId
     *
     * @return WpRgLeadDetail
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
     * Set fieldNumber
     *
     * @param float $fieldNumber
     *
     * @return WpRgLeadDetail
     */
    public function setFieldNumber($fieldNumber)
    {
        $this->fieldNumber = $fieldNumber;

        return $this;
    }

    /**
     * Get fieldNumber
     *
     * @return float
     */
    public function getFieldNumber()
    {
        return $this->fieldNumber;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return WpRgLeadDetail
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
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


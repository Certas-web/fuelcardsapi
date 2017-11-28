<?php

namespace AppBundle\Entity;

/**
 * WpRgLeadDetailLong
 */
class WpRgLeadDetailLong
{
    /**
     * @var string
     */
    private $value;

    /**
     * @var integer
     */
    private $leadDetailId;


    /**
     * Set value
     *
     * @param string $value
     *
     * @return WpRgLeadDetailLong
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
     * Get leadDetailId
     *
     * @return integer
     */
    public function getLeadDetailId()
    {
        return $this->leadDetailId;
    }
}


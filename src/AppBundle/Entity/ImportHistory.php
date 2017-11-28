<?php

namespace AppBundle\Entity;

/**
 * ImportHistory
 */
class ImportHistory
{
    /**
     * @var string
     */
    private $records;

    /**
     * @var \DateTime
     */
    private $updated = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $ip;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set records
     *
     * @param string $records
     *
     * @return ImportHistory
     */
    public function setRecords($records)
    {
        $this->records = $records;

        return $this;
    }

    /**
     * Get records
     *
     * @return string
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return ImportHistory
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return ImportHistory
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
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


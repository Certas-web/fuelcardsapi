<?php

namespace AppBundle\Entity;

/**
 * WpRgForm
 */
class WpRgForm
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var boolean
     */
    private $isActive = '1';

    /**
     * @var boolean
     */
    private $isTrash = '0';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return WpRgForm
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return WpRgForm
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return WpRgForm
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set isTrash
     *
     * @param boolean $isTrash
     *
     * @return WpRgForm
     */
    public function setIsTrash($isTrash)
    {
        $this->isTrash = $isTrash;

        return $this;
    }

    /**
     * Get isTrash
     *
     * @return boolean
     */
    public function getIsTrash()
    {
        return $this->isTrash;
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


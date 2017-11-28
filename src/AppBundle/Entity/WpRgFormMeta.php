<?php

namespace AppBundle\Entity;

/**
 * WpRgFormMeta
 */
class WpRgFormMeta
{
    /**
     * @var string
     */
    private $displayMeta;

    /**
     * @var string
     */
    private $entriesGridMeta;

    /**
     * @var string
     */
    private $confirmations;

    /**
     * @var string
     */
    private $notifications;

    /**
     * @var integer
     */
    private $formId;


    /**
     * Set displayMeta
     *
     * @param string $displayMeta
     *
     * @return WpRgFormMeta
     */
    public function setDisplayMeta($displayMeta)
    {
        $this->displayMeta = $displayMeta;

        return $this;
    }

    /**
     * Get displayMeta
     *
     * @return string
     */
    public function getDisplayMeta()
    {
        return $this->displayMeta;
    }

    /**
     * Set entriesGridMeta
     *
     * @param string $entriesGridMeta
     *
     * @return WpRgFormMeta
     */
    public function setEntriesGridMeta($entriesGridMeta)
    {
        $this->entriesGridMeta = $entriesGridMeta;

        return $this;
    }

    /**
     * Get entriesGridMeta
     *
     * @return string
     */
    public function getEntriesGridMeta()
    {
        return $this->entriesGridMeta;
    }

    /**
     * Set confirmations
     *
     * @param string $confirmations
     *
     * @return WpRgFormMeta
     */
    public function setConfirmations($confirmations)
    {
        $this->confirmations = $confirmations;

        return $this;
    }

    /**
     * Get confirmations
     *
     * @return string
     */
    public function getConfirmations()
    {
        return $this->confirmations;
    }

    /**
     * Set notifications
     *
     * @param string $notifications
     *
     * @return WpRgFormMeta
     */
    public function setNotifications($notifications)
    {
        $this->notifications = $notifications;

        return $this;
    }

    /**
     * Get notifications
     *
     * @return string
     */
    public function getNotifications()
    {
        return $this->notifications;
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
}


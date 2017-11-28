<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpRgLeadNotes
 *
 * @ORM\Table(name="wp_rg_lead_notes", indexes={@ORM\Index(name="lead_id", columns={"lead_id"}), @ORM\Index(name="lead_user_key", columns={"lead_id", "user_id"})})
 * @ORM\Entity
 */
class WpRgLeadNotes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lead_id", type="integer", nullable=false)
     */
    private $leadId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=250, nullable=true)
     */
    private $userName;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=true)
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=true)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="note_type", type="string", length=50, nullable=true)
     */
    private $noteType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}


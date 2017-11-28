<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpRgFormMeta
 *
 * @ORM\Table(name="wp_rg_form_meta")
 * @ORM\Entity
 */
class WpRgFormMeta
{
    /**
     * @var string
     *
     * @ORM\Column(name="display_meta", type="text", nullable=true)
     */
    private $displayMeta;

    /**
     * @var string
     *
     * @ORM\Column(name="entries_grid_meta", type="text", nullable=true)
     */
    private $entriesGridMeta;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmations", type="text", nullable=true)
     */
    private $confirmations;

    /**
     * @var string
     *
     * @ORM\Column(name="notifications", type="text", nullable=true)
     */
    private $notifications;

    /**
     * @var integer
     *
     * @ORM\Column(name="form_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $formId;


}


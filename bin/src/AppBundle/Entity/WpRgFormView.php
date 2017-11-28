<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpRgFormView
 *
 * @ORM\Table(name="wp_rg_form_view", indexes={@ORM\Index(name="form_id", columns={"form_id"})})
 * @ORM\Entity
 */
class WpRgFormView
{
    /**
     * @var integer
     *
     * @ORM\Column(name="form_id", type="integer", nullable=false)
     */
    private $formId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=true)
     */
    private $ip;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=false)
     */
    private $count = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}


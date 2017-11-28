<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpRgIncompleteSubmissions
 *
 * @ORM\Table(name="wp_rg_incomplete_submissions", indexes={@ORM\Index(name="form_id", columns={"form_id"})})
 * @ORM\Entity
 */
class WpRgIncompleteSubmissions
{
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

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
     * @ORM\Column(name="ip", type="string", length=39, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="source_url", type="text", nullable=false)
     */
    private $sourceUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="submission", type="text", nullable=false)
     */
    private $submission;

    /**
     * @var string
     *
     * @ORM\Column(name="uuid", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uuid;


}


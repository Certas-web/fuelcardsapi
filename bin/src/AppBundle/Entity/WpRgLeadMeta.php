<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpRgLeadMeta
 *
 * @ORM\Table(name="wp_rg_lead_meta", indexes={@ORM\Index(name="lead_id", columns={"lead_id"}), @ORM\Index(name="meta_key", columns={"meta_key"}), @ORM\Index(name="form_id_meta_key", columns={"form_id", "meta_key"})})
 * @ORM\Entity
 */
class WpRgLeadMeta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="form_id", type="integer", nullable=false)
     */
    private $formId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lead_id", type="bigint", nullable=false)
     */
    private $leadId;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_key", type="string", length=255, nullable=true)
     */
    private $metaKey;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_value", type="text", nullable=true)
     */
    private $metaValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}


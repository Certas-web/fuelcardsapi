<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpRgLeadDetail
 *
 * @ORM\Table(name="wp_rg_lead_detail", indexes={@ORM\Index(name="form_id", columns={"form_id"}), @ORM\Index(name="lead_id", columns={"lead_id"}), @ORM\Index(name="lead_field_number", columns={"lead_id", "field_number"})})
 * @ORM\Entity
 */
class WpRgLeadDetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lead_id", type="integer", nullable=false)
     */
    private $leadId;

    /**
     * @var integer
     *
     * @ORM\Column(name="form_id", type="integer", nullable=false)
     */
    private $formId;

    /**
     * @var float
     *
     * @ORM\Column(name="field_number", type="float", precision=10, scale=0, nullable=false)
     */
    private $fieldNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=200, nullable=true)
     */
    private $value;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}


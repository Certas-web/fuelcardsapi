<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpRgLeadDetailLong
 *
 * @ORM\Table(name="wp_rg_lead_detail_long")
 * @ORM\Entity
 */
class WpRgLeadDetailLong
{
    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=true)
     */
    private $value;

    /**
     * @var integer
     *
     * @ORM\Column(name="lead_detail_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $leadDetailId;


}


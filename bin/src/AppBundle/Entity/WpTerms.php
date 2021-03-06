<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpTerms
 *
 * @ORM\Table(name="wp_terms", indexes={@ORM\Index(name="slug", columns={"slug"}), @ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class WpTerms
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=200, nullable=false)
     */
    private $slug = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="term_group", type="bigint", nullable=false)
     */
    private $termGroup = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="term_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $termId;


}


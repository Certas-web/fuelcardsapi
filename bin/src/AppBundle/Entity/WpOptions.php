<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpOptions
 *
 * @ORM\Table(name="wp_options", uniqueConstraints={@ORM\UniqueConstraint(name="option_name", columns={"option_name"})})
 * @ORM\Entity
 */
class WpOptions
{
    /**
     * @var string
     *
     * @ORM\Column(name="option_name", type="string", length=64, nullable=false)
     */
    private $optionName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option_value", type="text", nullable=false)
     */
    private $optionValue;

    /**
     * @var string
     *
     * @ORM\Column(name="autoload", type="string", length=20, nullable=false)
     */
    private $autoload = 'yes';

    /**
     * @var integer
     *
     * @ORM\Column(name="option_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $optionId;


}


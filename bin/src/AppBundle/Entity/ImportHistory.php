<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportHistory
 *
 * @ORM\Table(name="import_history")
 * @ORM\Entity
 */
class ImportHistory
{
    /**
     * @var string
     *
     * @ORM\Column(name="records", type="string", length=2500, nullable=false)
     */
    private $records;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=false)
     */
    private $updated = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255, nullable=false)
     */
    private $ip;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}


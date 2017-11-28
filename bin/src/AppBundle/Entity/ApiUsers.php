<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApiUsers
 *
 * @ORM\Table(name="api_users")
 * @ORM\Entity
 */
class ApiUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="business", type="string", length=200, nullable=true)
     */
    private $business;

    /**
     * @var string
     *
     * @ORM\Column(name="job_title", type="string", length=200, nullable=true)
     */
    private $jobTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_no", type="string", length=200, nullable=true)
     */
    private $contactNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}


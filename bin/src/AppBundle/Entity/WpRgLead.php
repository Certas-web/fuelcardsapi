<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpRgLead
 *
 * @ORM\Table(name="wp_rg_lead", indexes={@ORM\Index(name="form_id", columns={"form_id"}), @ORM\Index(name="status", columns={"status"})})
 * @ORM\Entity
 */
class WpRgLead
{
    /**
     * @var integer
     *
     * @ORM\Column(name="form_id", type="integer", nullable=false)
     */
    private $formId;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_id", type="bigint", nullable=true)
     */
    private $postId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_starred", type="boolean", nullable=false)
     */
    private $isStarred = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_read", type="boolean", nullable=false)
     */
    private $isRead = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=39, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="source_url", type="string", length=200, nullable=false)
     */
    private $sourceUrl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_agent", type="string", length=250, nullable=false)
     */
    private $userAgent = '';

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=5, nullable=true)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_status", type="string", length=15, nullable=true)
     */
    private $paymentStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payment_date", type="datetime", nullable=true)
     */
    private $paymentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_amount", type="decimal", precision=19, scale=2, nullable=true)
     */
    private $paymentAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method", type="string", length=30, nullable=true)
     */
    private $paymentMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_id", type="string", length=50, nullable=true)
     */
    private $transactionId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_fulfilled", type="boolean", nullable=true)
     */
    private $isFulfilled;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="bigint", nullable=true)
     */
    private $createdBy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="transaction_type", type="boolean", nullable=true)
     */
    private $transactionType;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status = 'active';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}


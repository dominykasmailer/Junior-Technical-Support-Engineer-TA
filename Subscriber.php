<?php

namespace MailerLite;

/**
 * Class Subscriber
 *
 * @package MailerLite
 */
class Subscriber
{

    const TYPE_ACTIVE = 'active';
    const TYPE_UNSUBSCRIBED = 'unsubscribed';
    const TYPE_JUNK = 'junk';
    const TYPE_BOUNCED = 'bounced';
    const TYPE_UNCONFIRMED = 'unconfirmed';

    /** @var string $email */
    public $email;

    /** @var string $type */
    public $type;

    /**
     * @param  string  $email
     * @param  string  $type
     */
    function __construct(
        string $email,
        string $type = self::TYPE_ACTIVE
    ) {
        $this->email = $email;
        $this->type  = $type;
    }

}

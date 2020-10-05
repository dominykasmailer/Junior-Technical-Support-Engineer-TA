<?php

namespace MailerLite;

/**
 * Class SubscriberField
 *
 * @package MailerLite
 */
class SubscriberField
{

    const TYPE_TEXT = 'text';
    const TYPE_NUMBER = 'number';
    const TYPE_DATE = 'date';

    /** @var string $key */
    public $key;

    /** @var string $value */
    public $value;

    /** @var string $type */
    public $type;

    /**
     * @param  string  $key
     * @param  string  $type
     * @param  string  $value
     */
    function __construct(
        string $key,
        string $value,
        string $type = self::TYPE_TEXT
    ) {
        $this->key   = $key;
        $this->type  = $type;
        $this->value = $value;
    }

}

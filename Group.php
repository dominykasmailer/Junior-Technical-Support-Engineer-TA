<?php

namespace MailerLite;

/**
 * Class Group
 *
 * @package MailerLite
 */
class Group
{

    /** @var string $title */
    protected $title;

    /** @var Subscriber[] $subscribers */
    protected $subscribers;

    /**
     * Group constructor.
     *
     * @param  string  $title
     */
    function __construct(string $title)
    {
        $this->title = $title;
    }
}

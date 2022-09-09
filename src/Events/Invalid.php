<?php

namespace Sujip\PayPal\Notification\Events;

use Sujip\PayPal\Notification\Payload;

/**
 * Class Invalid.
 *
 * @package Sujip\PayPal\Notification\Events
 */
class Invalid extends Verification
{
    /**
     * @param Payload $payload
     * @param $error
     */
    public function __construct(Payload $payload, $error = null)
    {
        parent::__construct($payload);

        $this->error = $error;
    }

    /**
     * @return string
     */
    public function error()
    {
        return $this->error;
    }
}

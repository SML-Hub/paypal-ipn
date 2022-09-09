<?php

namespace PayPal\IPN\Event;

use PayPal\IPN\IPNMessage;
use Symfony\Contracts\EventDispatcher\Event;

abstract class IPNVerification extends Event
{
    /**
     * @var mixed
     */
    private $message;

    /**
     * @param IPNMessage $message
     */
    public function __construct(IPNMessage $message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}

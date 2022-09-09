<?php

namespace Sujip\Paypal\Notification\Test;

use PHPUnit\Framework\TestCase;
use Sujip\PayPal\Notification\Handler\ArrayHandler;

/**
 * Class EndPointTest.
 *
 * @package Sujip\Paypal\Notification\Test
 */
class EndPointTest extends TestCase
{
    const SANDOBX = 'https://ipnpb.sandbox.paypal.com/cgi-bin/webscr';
    const LIVE = 'https://ipnpb.paypal.com/cgi-bin/webscr';

    public function setUp(): void
    {
        $this->event = (new ArrayHandler([
            'foo' => 'bar',
            'bar' => 'baz',
        ]));
    }

    public function testEnv()
    {
        $this->assertTrue($this->event->sandbox()->env());
    }

    public function testUrl()
    {
        $this->assertEquals($this->event->url(), self::LIVE);

        $this->event->sandbox();

        $this->assertEquals($this->event->url(), self::SANDOBX);
    }
}

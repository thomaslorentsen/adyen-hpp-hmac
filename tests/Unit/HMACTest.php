<?php

class HMACTest extends \PHPUnit\Framework\TestCase
{
    public function testGenerateReturnsString()
    {
        $result = adyen_hmac('F00B44', ['test' => 'test']);
        $this->assertInternalType('string', $result);
    }

    public function testGenerateReturnsExpectedHash()
    {
        $result = adyen_hmac('F00B44', ['test' => 'test']);
        $this->assertEquals('Qeft2NQVCBnIYWXOkNT9Lkcs6gV4To6M9wktDPEypX8=', $result);
    }
}
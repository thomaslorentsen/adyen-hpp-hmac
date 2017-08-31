<?php

class SignatureTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @param string $hash
     * @param array $params
     *
     * @dataProvider \Test\Providers\ValidHashesProvider::hashes()
     */
    public function testGenerateReturnsString($hash, $params)
    {
        $signature = new \RoundPartner\Adyen\Signature();
        $result = $signature->generate($hash, $params);
        $this->assertInternalType('string', $result);
    }

    /**
     * @param string $hash
     * @param array $params
     *
     * @dataProvider \Test\Providers\ValidHashesProvider::hashes()
     */
    public function testGenerateReturnsValid($hash, $params)
    {
        $signature = new \RoundPartner\Adyen\Signature();
        $result = $signature->generate($hash, $params);
        $this->assertEquals('Qeft2NQVCBnIYWXOkNT9Lkcs6gV4To6M9wktDPEypX8=', $result);
    }
}

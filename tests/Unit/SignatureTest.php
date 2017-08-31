<?php

use \RoundPartner\Adyen\Signature;

class SignatureTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Signature
     */
    private $signature;

    public function setUp()
    {
        $this->signature = new Signature();
    }

    /**
     * @param string $signature
     * @param string $hash
     * @param array $params
     *
     * @dataProvider \Test\Providers\ValidHashesProvider::hashes()
     */
    public function testGenerateReturnsString($signature, $hash, $params)
    {
        $result = $this->signature->generate($hash, $params);
        $this->assertInternalType('string', $result);
    }

    /**
     * @param string $signature
     * @param string $hash
     * @param array $params
     *
     * @dataProvider \Test\Providers\ValidHashesProvider::hashes()
     */
    public function testGenerateReturnsValid($signature, $hash, $params)
    {
        $result = $this->signature->generate($hash, $params);
        $this->assertEquals($signature, $result);
    }

    /**
     * @param string $signature
     * @param string $hash
     * @param array $params
     *
     * @dataProvider \Test\Providers\ValidHashesProvider::hashes()
     */
    public function testValidateReturnsBool($signature, $hash, $params)
    {
        $result = $this->signature->validate($hash, $signature, $params);
        $this->assertInternalType('bool', $result);
    }

    /**
     * @param string $signature
     * @param string $hash
     * @param array $params
     *
     * @dataProvider \Test\Providers\ValidHashesProvider::hashes()
     */
    public function testValidateReturnsTrue($signature, $hash, $params)
    {
        $result = $this->signature->validate($hash, $signature, $params);
        $this->assertTrue($result);
    }

    /**
     * @param string $signature
     * @param string $hash
     * @param array $params
     *
     * @dataProvider \Test\Providers\InvalidHashesProvider::hashes()
     */
    public function testValidateReturnsFalse($signature, $hash, $params)
    {
        $result = $this->signature->validate($hash, $signature, $params);
        $this->assertFalse($result);
    }
}

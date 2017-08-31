<?php

use \RoundPartner\Adyen\Signature;

class SignatureTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Signature
     */
    private $signature;

    /**
     * @param string $signature
     * @param string $key
     * @param array $params
     *
     * @dataProvider \Test\Providers\ValidHashesProvider::hashes()
     */
    public function testGenerateReturnsString($signature, $key, $params)
    {
        $this->create($key);
        $result = $this->signature->generate($params);
        $this->assertInternalType('string', $result);
    }

    /**
     * @param string $signature
     * @param string $key
     * @param array $params
     *
     * @dataProvider \Test\Providers\ValidHashesProvider::hashes()
     */
    public function testGenerateReturnsValid($signature, $key, $params)
    {
        $this->create($key);
        $result = $this->signature->generate($params);
        $this->assertEquals($signature, $result);
    }

    /**
     * @param string $signature
     * @param string $key
     * @param array $params
     *
     * @dataProvider \Test\Providers\ValidHashesProvider::hashes()
     */
    public function testValidateReturnsBool($signature, $key, $params)
    {
        $this->create($key);
        $result = $this->signature->validate($signature, $params);
        $this->assertInternalType('bool', $result);
    }

    /**
     * @param string $signature
     * @param string $key
     * @param array $params
     *
     * @dataProvider \Test\Providers\ValidHashesProvider::hashes()
     */
    public function testValidateReturnsTrue($signature, $key, $params)
    {
        $this->create($key);
        $result = $this->signature->validate($signature, $params);
        $this->assertTrue($result);
    }

    /**
     * @param string $signature
     * @param string $key
     * @param array $params
     *
     * @dataProvider \Test\Providers\InvalidHashesProvider::hashes()
     */
    public function testValidateReturnsFalse($signature, $key, $params)
    {
        $this->create($key);
        $result = $this->signature->validate($signature, $params);
        $this->assertFalse($result);
    }

    /**
     * @param $key
     */
    private function create($key)
    {
        $this->signature = new Signature($key);
    }
}

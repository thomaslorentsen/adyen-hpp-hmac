<?php

namespace RoundPartner\Adyen;

class Signature
{

    /**
     * @var string
     */
    protected $hmacKey;

    /**
     * @param string $hmacKey
     */
    public function __construct($hmacKey)
    {
        $this->hmacKey = $hmacKey;
    }

    /**
     * @param string[] $params
     *
     * @return string
     */
    public function generate($params)
    {
        return adyen_hmac($this->hmacKey, $params);
    }

    /**
     * @param string $signature
     * @param string[] $params
     *
     * @return bool
     */
    public function validate($signature, $params)
    {
        return $signature === $this->generate($params);
    }
}

<?php

namespace RoundPartner\Adyen;

class Signature
{
    /**
     * @param string $hmacKey
     * @param string[] $params
     *
     * @return string
     */
    public function generate($hmacKey, $params)
    {
        return adyen_hmac($hmacKey, $params);
    }

    /**
     * @param string $hmacKey
     * @param string $signature
     * @param string[] $params
     *
     * @return bool
     */
    public function validate($hmacKey, $signature, $params)
    {
        return $signature === $this->generate($hmacKey, $params);
    }
}

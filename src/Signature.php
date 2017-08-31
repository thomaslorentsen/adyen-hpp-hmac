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
}

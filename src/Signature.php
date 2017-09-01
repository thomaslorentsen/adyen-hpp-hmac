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
        return adyen_hmac($this->hmacKey, $this->filterParams($params));
    }

    /**
     * @param string $signature
     * @param string[] $params
     *
     * @return bool
     */
    public function validate($signature, $params)
    {
        return hash_equals($this->generate($params), $signature);
    }

    /**
     * @param array $params
     *
     * @return array
     */
    private function filterParams($params)
    {
        if (!array_key_exists('merchantSig', $params)) {
            return $params;
        }
        if (!defined('ARRAY_FILTER_USE_KEY')) {
            $filteredParams = array();
            foreach ($params as $key => $value) {
                if ('merchantSig' === $key) {
                    continue;
                }
                $filteredParams[$key] = $value;
            }
            return $filteredParams;
        }
        return array_filter($params, function($key) { return 'merchantSig' !== $key; }, ARRAY_FILTER_USE_KEY);
    }
}

[![Build Status](https://travis-ci.org/thomaslorentsen/adyen-hpp-hmac.svg?branch=master)](https://travis-ci.org/thomaslorentsen/adyen-hpp-hmac)

# Adyen HHP HMAC Generator
HMAC Generator for Adyen Hosted Payment Pages

# Installation
Add the following to your composer config
```json
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/thomaslorentsen/adyen-hpp-hmac"
    }
  ],
  "require": {
    "thomaslorentsen/adyen-hpp-hmac": "dev-master"
  }
```

```php
$hmacKey = 'YOUR_HMAC_KEY'
$params = [
    "merchantReference" => "SKINTEST-123456789",
    "merchantAccount"   => "merchantAccount",
    "currencyCode"      => "GBP",
    "paymentAmount"     => "2000",
    "sessionValidity"   => "2020-12-25T10:31:06Z",
    "shipBeforeDate"    => "2017-08-25",
    "shopperLocale"     => "en_GB",
    "skinCode"          => "skinCode",
    "brandCode"         => "paypal_ecs",
    "shopperEmail"      => "test@adyen.com",
    "shopperReference"  => "123",
];
adyen_hmac($hmacKey, $params);
```

# Testing
```bash
vendor/bin/phpunit
```

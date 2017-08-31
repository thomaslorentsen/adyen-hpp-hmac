<?php

namespace Test\Providers;

class InvalidHashesProvider
{
    public static function hashes()
    {
        return [
            ['Qeft2NQVCBnIYWXOkNT9Lkcs6gV4To6M9wktDPEypX8=', 'B44F00', ['test' => 'test']]
        ];
    }

}
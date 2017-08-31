<?php

namespace Test\Providers;

class ValidHashesProvider
{
    public static function hashes()
    {
        return [
           ['Qeft2NQVCBnIYWXOkNT9Lkcs6gV4To6M9wktDPEypX8=', 'F00B44', ['test' => 'test']],
           ['Qeft2NQVCBnIYWXOkNT9Lkcs6gV4To6M9wktDPEypX8=', 'F00B44', ['test' => 'test', 'blank' => '']],
        ];
    }

    public static function unfilteredHashes()
    {
        return [
            ['Qeft2NQVCBnIYWXOkNT9Lkcs6gV4To6M9wktDPEypX8=', 'F00B44', [
                'test' => 'test',
                'merchantSig' => 'hello world',
            ]],
            ['Qeft2NQVCBnIYWXOkNT9Lkcs6gV4To6M9wktDPEypX8=', 'F00B44', [
                'test' => 'test',
                'merchantSig' => 'hello world',
                'blank' => '',
            ]],
        ];
    }

}
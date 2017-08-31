<?php

namespace Test\Providers;

class ValidHashesProvider
{
    public static function hashes()
    {
        return [
           ['Qeft2NQVCBnIYWXOkNT9Lkcs6gV4To6M9wktDPEypX8=', 'F00B44', ['test' => 'test']],
           ['F4EeBbhTP8Kc6DxyEK9RfcoHfUMyr5SDlHF+fw2OVwk=', 'F00B44', ['test' => 'test', 'blank' => '']],
        ];
    }

    public static function unfilteredHashes()
    {
        return [
            ['Qeft2NQVCBnIYWXOkNT9Lkcs6gV4To6M9wktDPEypX8=', 'F00B44', [
                'test' => 'test',
                'merchantSig' => 'hello world',
            ]],
            ['F4EeBbhTP8Kc6DxyEK9RfcoHfUMyr5SDlHF+fw2OVwk=', 'F00B44', [
                'test' => 'test',
                'merchantSig' => 'hello world',
                'blank' => '',
            ]],
        ];
    }

}
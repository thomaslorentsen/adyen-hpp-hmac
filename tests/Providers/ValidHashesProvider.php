<?php

namespace Test\Providers;

class ValidHashesProvider
{
    public static function hashes()
    {
        return [
           ['Qeft2NQVCBnIYWXOkNT9Lkcs6gV4To6M9wktDPEypX8=', 'F00B44', ['test' => 'test']],
           ['F4EeBbhTP8Kc6DxyEK9RfcoHfUMyr5SDlHF+fw2OVwk=', 'F00B44', ['test' => 'test', 'blank' => '']],
           ['SWQ/OnS7jnfQAfUPq2YzLQu1H9tUxQ9pLTttjsbq6qQ=', 'F00B44', ['test' => 'test', 'blank' => '', 'payment' => '']],
           ['7Qpfp8rsP9IQg68xvaAqVwQixXGG+kUhj946ZZvF5JM=', 'F00B44', ['test' => 'test', 'blank' => '', 'payment' => '0']],
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
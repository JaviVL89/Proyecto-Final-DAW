<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CacheTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cache')->insert([
            ['key' => '1b6453892473a467d07372d45eb05abc2031647a', 'value' => 'i:1;', 'expiration' => 1718396868],
            ['key' => '1b6453892473a467d07372d45eb05abc2031647a:timer', 'value' => 'i:1718396868;', 'expiration' => 1718396868],
            ['key' => '632667547e7cd3e0466547863e1207a8c0c0c549', 'value' => 'i:1;', 'expiration' => 1718399143],
            ['key' => '632667547e7cd3e0466547863e1207a8c0c0c549:timer', 'value' => 'i:1718399143;', 'expiration' => 1718399143],
            ['key' => 'b6692ea5df920cad691c20319a6fffd7a4a766b8', 'value' => 'i:1;', 'expiration' => 1718453016],
            ['key' => 'b6692ea5df920cad691c20319a6fffd7a4a766b8:timer', 'value' => 'i:1718453016;', 'expiration' => 1718453016],
            ['key' => 'cb4e5208b4cd87268b208e49452ed6e89a68e0b8', 'value' => 'i:1;', 'expiration' => 1718449159],
            ['key' => 'cb4e5208b4cd87268b208e49452ed6e89a68e0b8:timer', 'value' => 'i:1718449159;', 'expiration' => 1718449159],
            ['key' => 'demo@prueba.com|127.0.0.1', 'value' => 'i:1;', 'expiration' => 1718387012],
            ['key' => 'demo@prueba.com|127.0.0.1:timer', 'value' => 'i:1718387012;', 'expiration' => 1718387012],
            ['key' => 'f1f836cb4ea6efb2a0b1b99f41ad8b103eff4b59', 'value' => 'i:1;', 'expiration' => 1718455304],
            ['key' => 'f1f836cb4ea6efb2a0b1b99f41ad8b103eff4b59:timer', 'value' => 'i:1718455304;', 'expiration' => 1718455304],
            ['key' => 'hola@hola.com|127.0.0.1', 'value' => 'i:2;', 'expiration' => 1718219282],
            ['key' => 'hola@hola.com|127.0.0.1:timer', 'value' => 'i:1718219282;', 'expiration' => 1718219282],
            ['key' => 'prueba@prueba.com|127.0.0.1', 'value' => 'i:2;', 'expiration' => 1718361966],
            ['key' => 'prueba@prueba.com|127.0.0.1:timer', 'value' => 'i:1718361966;', 'expiration' => 1718361966],
            ['key' => 'test@prueba.com|127.0.0.1', 'value' => 'i:4;', 'expiration' => 1718386983],
            ['key' => 'test@prueba.com|127.0.0.1:timer', 'value' => 'i:1718386983;', 'expiration' => 1718386983],
        ]);
    }
}

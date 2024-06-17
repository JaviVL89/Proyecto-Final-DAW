<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Verificar si el usuario ya existe antes de insertarlo
        $existingUser = DB::table('users')->where('email', 'default@example.com')->first();
        if (!$existingUser) {
            DB::table('users')->insert([
                'name' => 'Default User',
                'email' => 'default@example.com',
                'password' => Hash::make('password'),
            ]);
        }
    }
}

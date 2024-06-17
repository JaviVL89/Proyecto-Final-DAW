<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('sessions')->insert([
            ['id' => 'd5wbV3Cdjr016huJCgwiSkdlx5Ynv0nV3ehIBIhs', 'user_id' => 4, 'ip_address' => '127.0.0.1', 'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'payload' => 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNUdVUUNSSDhhSjVERzhQQ0F6RmFObHJWeUFPV3hyYlFKSDMyeVZtcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 'last_activity' => 1718560879],
        ]);
    }
}

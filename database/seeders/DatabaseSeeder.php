<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // استدعاء Seeder الخاص بالخدمات
        $this->call(ServiceSeeder::class);
    }
}

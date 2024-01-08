<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VeduteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public static $called = VeduteSeeder::class;

    public function run(): void
    {
        \App\Models\Vedute::factory()->count(10)->create();

        $this->command->info('Vedute table seeded!');
    }
}

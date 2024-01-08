<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Artist::factory()->count(10)->create();

        $this->command->info('Artist table seeded!');

        $this->call(VeduteSeeder::$called);

    }
}

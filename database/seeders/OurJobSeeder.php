<?php

namespace Database\Seeders;

use App\Models\OurJob;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OurJobSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        OurJob::factory(20)->create();
    }
}

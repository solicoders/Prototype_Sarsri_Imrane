<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\School_year;

class School_yearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School_year::create([
            'start_date' => '2020',
        ]);
        School_year::create([
            'start_date' => '2021',
        ]);
        School_year::create([
            'start_date' => '2022',
        ]);
        School_year::create([
            'start_date' => '2023',
        ]);
    }
}
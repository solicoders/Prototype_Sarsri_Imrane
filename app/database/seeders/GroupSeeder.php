<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // 'Group_number',
    // 'Reference',
    // 'school_years_id
    public function run(): void
    {
        Group::create([
            'Group_number' => 'DWB-101',
            'Reference' => 'Web',
            'school_years_id' => '1'
        ]);
        Group::create([
            'Group_number' => 'DWB-102',
            'Reference' => 'Web',
            'school_years_id' => '1'
        ]);
        Group::create([
            'Group_number' => 'DWB-103',
            'Reference' => 'Web',
            'school_years_id' => '1'
        ]);
        Group::create([
            'Group_number' => 'DWB-104',
            'Reference' => 'Web',
            'school_years_id' => '1'
        ]);
        Group::create([
            'Group_number' => 'DWB-101',
            'Reference' => 'Mobaile',
            'school_years_id' => '1'
        ]);

        Group::create([
            'Group_number' => 'DWB-101',
            'Reference' => 'Web',
            'school_years_id' => '2'
        ]);
        Group::create([
            'Group_number' => 'DWB-102',
            'Reference' => 'Web',
            'school_years_id' => '2'
        ]);
        Group::create([
            'Group_number' => 'DWB-103',
            'Reference' => 'Web',
            'school_years_id' => '2'
        ]);
        Group::create([
            'Group_number' => 'DMB-101',
            'Reference' => 'Web',
            'school_years_id' => '2'
        ]);
        Group::create([
            'Group_number' => 'DMB-102',
            'Reference' => 'Mobaile',
            'school_years_id' => '2'
        ]);

        Group::create([
            'Group_number' => 'DWB-101',
            'Reference' => 'Web',
            'school_years_id' => '3'
        ]);

        Group::create([
            'Group_number' => 'DWB-102',
            'Reference' => 'Web',
            'school_years_id' => '3'
        ]);
        Group::create([
            'Group_number' => 'DMB-101',
            'Reference' => 'Mobail',
            'school_years_id' => '3'
        ]);
        Group::create([
            'Group_number' => 'DMB-102',
            'Reference' => 'Mobail',
            'school_years_id' => '3'
        ]);

        Group::create([
            'Group_number' => 'DWB-101',
            'Reference' => 'Web',
            'school_years_id' => '4'
        ]);
        Group::create([
            'Group_number' => 'DWB-102',
            'Reference' => 'Web',
            'school_years_id' => '4'
        ]);
        Group::create([
            'Group_number' => 'DWB-102',
            'Reference' => 'Web',
            'school_years_id' => '4'
        ]);
        Group::create([
            'Group_number' => 'DWB-104',
            'Reference' => 'Web',
            'school_years_id' => '4'
        ]);
        Group::create([
            'Group_number' => 'DMB-101',
            'Reference' => 'Mobail',
            'school_years_id' => '4'
        ]);
    }
}

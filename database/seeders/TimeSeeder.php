<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('times')->insert([
            'time' => '07:00',
            'time' => '07:30',
            'time' => '08:00',
            'time' => '08:30',
            'time' => '09:00',
            'time' => '09:30',
            'time' => '10:00',
            'time' => '10:30',
        ]);
    }
}

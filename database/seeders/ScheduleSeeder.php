<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schedules')->insert([
            [
                'time' => '08:00-08:30',
                'title' => 'Introduction',
                'panelist' => 'John Doe',
                'sesi_id' => '2'
            ]
        ]);
    }
}

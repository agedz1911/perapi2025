<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schedule_sessions')->insert([
            [
                'category_sesi' => 'Symposium',
                'title_ses' => 'InasRU',
                'date' => '2025-09-22',
                'time' => '08:00 - 13:00',
                'moderator' => 'dr. sumpena',
                'panelist' => 'rizki aditya, salman utama, rizki',
                'room' => 'Ballroom A'
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtGlanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('atglances')->insert([

            [
                'date' => '2025-09-24',
                'room' => 'Room 2',
                'session_category' => 'Master Class 2',
                'session_name' => 'UAA',
                'moderator' => 'ponco',
                'start_time' => '07:00:00',
                'end_time' => '09:45:00',
            ],
            
        ]);
    }
}

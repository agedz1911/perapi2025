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
                'id' => 3,
                'title' => 'Event #3',
                'start' => '2018-12-04 00:00:00',
                'end' => '2018-12-20 00:00:00'
            ],
            [
                'id' => 4,
                'title' => 'Event #4',
                'start' => '2018-12-01 08:00:00',
                'end' => '2018-12-01 12:00:00'
            ],
            [
                'id' => 5,
                'title' => 'Event #5',
                'start' => '2018-12-20 08:00:00',
                'end' => '2018-12-20 12:00:00'
            ],
            [
                'id' => 6,
                'title' => 'Event #6',
                'start' => '2018-12-25 08:00:00',
                'end' => '2018-12-25 12:00:00'
            ]
        ]);
    }
}

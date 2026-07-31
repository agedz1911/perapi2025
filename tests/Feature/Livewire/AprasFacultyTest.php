<?php

use App\Livewire\Apras\Faculty as AprasFaculty;
use App\Models\Faculty;
use App\Models\Schedule;
use App\Models\ScheduleSession;
use Livewire\Livewire;

describe('Apras faculty component', function () {
    it('renders faculty cards even when a schedule has no session relation', function () {
        $faculty = Faculty::create([
            'name' => 'Test Faculty',
            'country' => 'Indonesia',
            'description' => 'Test description',
            'category' => 'apras',
            'is_active' => true,
            'no_urut' => 1,
        ]);

        $session = ScheduleSession::create([
            'category_sesi' => 'Main',
            'title_ses' => 'Test session',
            'date' => '2026-01-01',
            'time' => '10:00',
            'room' => 'Room A',
        ]);

        Schedule::create([
            'faculty_id' => $faculty->id,
            'sesi_id' => $session->id,
            'time_speaker' => '10:00',
            'topic_title' => 'Topic with session',
        ]);

        Livewire::test(AprasFaculty::class)
            ->assertSee('Test Faculty')
            ->assertSee('Schedule Details');
    });
});

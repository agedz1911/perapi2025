<?php

namespace App\Livewire\Pages;

use App\Models\ScheduleSession;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('ASMIUA - Scientific Schedule')]
class Schedule extends Component
{

    public function render()
    {
        $scheduleSessions = ScheduleSession::with('schedules')->get(); // get model sessionSchedule dan schedule
        $groupedSessions = [];
        foreach ($scheduleSessions as $sesi) {
            $key = $sesi->date . '|' . $sesi->category_sesi;
            if (!isset($groupedSessions[$key])) {
                $groupedSessions[$key] = [
                    'date' => $sesi->date,
                    'category_sesi' => $sesi->category_sesi,
                    'sesis' => [],
                ];
            }
            $groupedSessions[$key]['sesis'][] = $sesi;
        }
        return view('livewire.pages.schedule', ['groupedSessions' => $groupedSessions]);
    }
}

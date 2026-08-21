<?php

namespace App\Livewire\Pages;

use App\Models\atGlance as ModelsAtGlance;
use App\Models\ScheduleSession;
use App\Models\Time;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Program at Glance - APRAS InaPRAS 2026')]
class AtGlance extends Component
{
    private const DAYS = [
        '2026-09-03' => [
            'label' => '3 September',
            'rooms' => ['Pecatu 3&5', 'Legian 1', 'Legian 2', 'Legian 6', 'Legian 7'],
        ],
        '2026-09-04' => [
            'label' => '4 September',
            'rooms' => ['Pecatu 3&5', 'Mengwi 1&2', 'Mengwi 3', 'Mengwi 5'],
        ],
        '2026-09-05' => [
            'label' => '5 September',
            'rooms' => ['Mengwi 1&2', 'Mengwi 3&5', 'Mengwi 6&7', 'room 1','room 2','room 3', 'DAPS CLINIC'],
        ],
    ];

    public $search = '';
    public $atglances;
    public $tiga;
    public $empat;
    public $lima;
    // public $tiga;

    public function resetSearch()
    {
        $this->search = '';
    }

    public function render()
    {
        $this->atglances = ScheduleSession::query()
            ->select([
                'id',
                'category_sesi',
                'title_ses',
                'date',
                'time',
                'room',
                'moderator',
                'no_urut',
            ])
            ->with('schedules:id,sesi_id,time_speaker,topic_title,speaker')
            ->when(trim($this->search) !== '', function ($query) {
                $search = trim($this->search);

                $query->where(function ($query) use ($search) {
                    $query->where('title_ses', 'like', '%' . $search . '%')
                        ->orWhere('room', 'like', '%' . $search . '%');
                });
            })
            ->orderBy('date')
            ->orderBy('no_urut')
            ->get();

        $sessionsByDate = $this->atglances->groupBy('date');
        $this->tiga = $sessionsByDate->get('2026-09-03', collect());
        $this->empat = $sessionsByDate->get('2026-09-04', collect());
        $this->lima = $sessionsByDate->get('2026-09-05', collect());

        $days = collect(self::DAYS)->map(function (array $day, string $date) use ($sessionsByDate) {
            $day['sessionsByRoom'] = $sessionsByDate->get($date, collect())->groupBy('room');

            return $day;
        });
        return view('livewire.pages.at-glance', compact('days'));
    }
}

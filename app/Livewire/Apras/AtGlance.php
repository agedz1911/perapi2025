<?php

namespace App\Livewire\Apras;

use App\Models\ScheduleSession;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Program at Glance - APRAS InaPRAS 2026')]
#[Layout('components.layouts.apras')]
class AtGlance extends Component
{
    private const DAYS = [
        '2026-09-02' => [
            'label' => '2 September',
            'rooms' => ['Pecatu 1&2', 'Mengwi 1', 'Mengwi 2', 'Mengwi 3', 'Mengwi 5', 'Mengwi 6', 'Mengwi 7'],
        ],
        '2026-09-03' => [
            'label' => '3 September',
            'rooms' => ['Pecatu 1&2', 'Mengwi 1', 'Mengwi 2', 'Mengwi 3', 'Mengwi 5', 'Mengwi 6', 'Mengwi 7', 'Mengwi 1&2', 'Mengwi 3&5', 'Mengwi 6&7'],
        ],
    ];

    public $search = '';
    public $atglances;
    public $tiga;
    public $dua;
    // public $lima;
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
        $this->dua = $sessionsByDate->get('2026-09-02', collect());

        $days = collect(self::DAYS)->map(function (array $day, string $date) use ($sessionsByDate) {
            $day['sessionsByRoom'] = $sessionsByDate->get($date, collect())->groupBy('room');

            return $day;
        });
        return view('livewire.apras.at-glance', compact('days'));
    }
}

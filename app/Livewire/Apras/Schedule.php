<?php

namespace App\Livewire\Apras;

use Livewire\Component;
use App\Models\ScheduleSession;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Schedules - APRAS 2026')]
#[Layout('components.layouts.apras')]
class Schedule extends Component
{
    public $search;
    public $category;
    public $date;
    public $congressFor;

    public function resetDate()
    {
        $this->date = null;
    }
    public function resetCategory()
    {
        $this->category = null;
    }

    public function resetCongressFor()
    {
        $this->congressFor = null;
    }

    public function render()
    {
        $search = trim((string) $this->search);

        $atglancesQuery = ScheduleSession::query()
            ->select([
                'id',
                'category_sesi',
                'title_ses',
                'date',
                'time',
                'room',
                'moderator',
                'panelist',
                'congress_for',
            ])
            ->where('congress_for', 'APRAS')
            ->with([
                'schedules' => function ($query) {
                    $query->select([
                        'id',
                        'sesi_id',
                        'time_speaker',
                        'topic_title',
                        'speaker',
                    ])->orderBy('time_speaker');
                },
            ]);

        if ($search !== '') {
            $atglancesQuery->where(function ($query) use ($search) {
                $query->where('title_ses', 'like', '%' . $search . '%')
                    ->orWhere('room', 'like', '%' . $search . '%')
                    ->orWhereHas('schedules', function ($query) use ($search) {
                        $query->where('topic_title', 'like', '%' . $search . '%')
                            ->orWhere('speaker', 'like', '%' . $search . '%');
                    });
            });
        }

        $atglances = $atglancesQuery
            ->when($this->category, function ($query, $category) {
                return $query->where('category_sesi', $category);
            })
            ->when($this->date, function ($query, $date) {
                return $query->where('date', $date);
            })
            ->when($this->congressFor, function ($query, $congressFor) {
                return $query->where('congress_for', $congressFor);
            })
            ->orderBy('date')
            ->orderBy('time')
            ->get();

        $sessionsByDate = $atglances
            ->groupBy('date')
            ->map(function ($sessions) {
                return $sessions->groupBy('category_sesi');
            })
            ->filter(function ($sessionsByCategory, $date) {
                return ! empty($sessionsByCategory);
            });

        $uniqCategories = $atglances->pluck('category_sesi')->filter()->unique()->values();
        $uniqDates = $atglances->pluck('date')->filter()->unique()->sort()->values();
        $uniqCongressFors = $atglances->pluck('congress_for')->filter()->unique()->sort()->values();

        return view('livewire.apras.schedule', [
            'sessionsByDate' => $sessionsByDate,
            'uniqCategories' => $uniqCategories,
            'uniqDates' => $uniqDates,
            'uniqCongressFors' => $uniqCongressFors,
        ]);
    }
}

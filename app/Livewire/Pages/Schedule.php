<?php

namespace App\Livewire\Pages;

use App\Models\ScheduleSession;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Scientific Schedule - APRAS InaPRAS 2026')]
class Schedule extends Component
{
    public $search;
    public $category;
    public $date;
    public $congress;

    public function resetDate()
    {
        $this->date = null;
    }
    public function resetCategory()
    {
        $this->category = null;
    }

    public function resetCongress()
    {
        $this->congress = null;
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
            ->when($this->congress, function ($query, $congress) {
                return $query->where('congress_for', $congress);
            })
            ->orderBy('date')
            ->orderBy('time')
            ->get();

        $scheduleGroups = $atglances
            ->groupBy('date')
            ->map(function ($sessionsByDate, $date) {
                return $sessionsByDate
                    ->groupBy('category_sesi')
                    ->filter(function ($sessions, $category) use ($date) {
                        return ! $this->shouldHideCategoryForDate($date, $category);
                    });
            });

        $uniqCategories = $atglances->pluck('category_sesi')->filter()->unique()->values();
        $uniqDates = $atglances->pluck('date')->filter()->unique()->sort()->values();
        $uniqCongress = $atglances->pluck('congress_for')->filter()->unique()->sort()->values();

        return view('livewire.pages.schedule', [
            'atglances' => $atglances,
            'scheduleGroups' => $scheduleGroups,
            'uniqCategories' => $uniqCategories,
            'uniqDates' => $uniqDates,
            'uniqCongress' => $uniqCongress,
        ]);
    }

    private function shouldHideCategoryForDate(string $date, string $category): bool
    {
        $hiddenCategoriesByDate = [
            '2026-09-02' => ['Workshop', 'Research Proposal', 'E-Poster', 'Video Parade'],
            '2026-09-03' => ['Workshop', 'Master Class', 'Video Parade'],
            '2026-09-04' => ['Free Paper', 'Research Proposal', 'Master Class', 'Workshop'],
            '2026-09-05' => ['Free Paper', 'Research Proposal', 'E-Poster', 'Master Class', 'Symposium'],
        ];

        return in_array($category, $hiddenCategoriesByDate[$date] ?? [], true);
    }

    // public function updateSelectedDates($date)
    // {
    //     if (in_array($date, $this->selectedDates)) {
    //         $this->selectedDates = array_diff($this->selectedDates, [$date]);
    //     } else {
    //         $this->selectedDates[] = $date;
    //     }
    // }

    // public function updateSelectedRooms($room)
    // {
    //     if (in_array($room, $this->selectedRooms)) {
    //         $this->selectedRooms = array_diff($this->selectedRooms, [$room]);
    //     } else {
    //         $this->selectedRooms[] = $room;
    //     }
    // }

    // public function updateSelectedCategories($category)
    // {
    //     if (in_array($category, $this->selectedCategories)) {
    //         $this->selectedCategories = array_diff($this->selectedCategories, [$category]);
    //     } else {
    //         $this->selectedCategories[] = $category;
    //     }
    // }
}

<?php

namespace App\Livewire\Pages;

use App\Models\ScheduleSession;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('ASMIUA - Scientific Schedule')]
class Schedule extends Component
{
    public $search = '';
    public $selectedDates = [];
    public $selectedRooms = [];
    public $selectedCategories = [];

    protected $queryString = ['selectedRooms', 'selectedDates'];

    public $dates = [];
    public $rooms = [];
    public $categories = [];

    public function mount()
    {
        $this->dates = ScheduleSession::select('date')->distinct()->pluck('date')->toArray();
        $this->rooms = ScheduleSession::select('room')->distinct()->pluck('room')->toArray();
        $this->categories = ScheduleSession::select('title_ses')->distinct()->pluck('title_ses')->toArray();
    }

    public function render()
    {
        $scheduleSessions = ScheduleSession::with('schedules')
            ->where('title_ses', 'like', '%' . $this->search . '%')
            ->orWhere('room', 'like', '%' . $this->search . '%')
            ->orWhereHas('schedules', function ($query) {
                $query->where('topic_title', 'like', '%' . $this->search . '%')
                    ->orWhere('speaker', 'like', '%' . $this->search . '%');
            })
            ->when($this->selectedRooms, function ($query) {
                $query->whereIn('room', $this->selectedRooms);
            })
            ->when($this->selectedDates, function ($query) {
                $query->whereIn('date', $this->selectedDates);
            })
            ->when($this->selectedCategories, function ($query) {
                return $query->whereIn('category_sesi', $this->selectedCategories);
            })
            ->get();

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
        return view('livewire.pages.schedule', [
            'groupedSessions' => $groupedSessions,
            'dates' => $this->dates,
            'rooms' => $this->rooms,
            'categories' => $this->categories
        ]);
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

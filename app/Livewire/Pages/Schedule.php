<?php

namespace App\Livewire\Pages;

use App\Models\ScheduleSession;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Scientific Schedule - The 28th InaPRAS')]
class Schedule extends Component
{
    public $search;
    public $category;
    public $date;

    public function resetDate()
    {
        $this->date = null;
    }
    public function resetCategory()
    {
        $this->category = null;
    }

    public function render()
    {
        $atglances = ScheduleSession::with('schedules')
            ->where(function ($query) {
                $query->where('title_ses', 'like', '%' . $this->search . '%')
                    ->orWhere('room', 'like', '%' . $this->search . '%')
                    ->orWhereHas('schedules', function ($query) {
                        $query->where('topic_title', 'like', '%' . $this->search . '%')
                            ->orWhere('speaker', 'like', '%' . $this->search . '%');
                    });
            })

            ->when($this->category, function ($query, $category) {
                return $query->where('category_sesi', $category);
            })
            ->when($this->date, function ($query, $date) {
                return $query->where('date', $date);
            })
            ->get();
        $uniqCategories = $atglances->pluck('category_sesi')->unique();
        $uniqDates = $atglances->pluck('date')->unique();
        return view('livewire.pages.schedule', [
            'atglances' => $atglances,
            'uniqCategories' => $uniqCategories,
            'uniqDates' => $uniqDates,
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

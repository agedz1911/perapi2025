<?php

namespace App\Livewire\Pages;

use App\Models\atGlance as ModelsAtGlance;
use App\Models\ScheduleSession;
use App\Models\Time;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Program at Glance - The 28th InaPRAS')]
class AtGlance extends Component
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
        return view('livewire.pages.at-glance', [
            'atglances' => $atglances,
            'uniqCategories' => $uniqCategories,
            'uniqDates' => $uniqDates,
        ]);
    }
}

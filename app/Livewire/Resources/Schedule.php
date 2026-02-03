<?php

namespace App\Livewire\Resources;

use App\Models\AtGlance;
use App\Models\ScheduleSession;
use App\Models\ScientificSchedule;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Scientific Schedule - 6th INDORHINO Congress')]
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
        $atglances = AtGlance::with('schedules')
            ->where(function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
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
        $uniqDates = $atglances->pluck('date')->unique()->sort();

        return view('livewire.resources.schedule', [
            'atglances' => $atglances,
            'uniqCategories' => $uniqCategories,
            'uniqDates' => $uniqDates
        ]);
    }
}

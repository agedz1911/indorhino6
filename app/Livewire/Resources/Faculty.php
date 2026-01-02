<?php

namespace App\Livewire\Resources;

use App\Models\Faculty as ModelsFaculty;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Faculty extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $searchTerm = "";

    public function render()
    {
        $queryfaculties = ModelsFaculty::where('is_active', 1)->orderBy('no_urut', 'asc')->with('schedules');

        if (strlen($this->searchTerm) >= 3) {
            $queryfaculties->where(function ($q) {
                $q->where('name', 'like', '%' . $this->searchTerm . '%');
            });
        }

        $faculties = $queryfaculties
            ->get();

        return view('livewire.resources.faculty', ['faculties' => $faculties]);
    }
}

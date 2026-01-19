<?php

namespace App\Livewire\Pages;

use App\Models\Visiting as ModelsVisiting;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Visiting - 6th INDORHINO Congress')]

class Visiting extends Component
{
    public function render()
    {
        $visitings = ModelsVisiting::where('is_active->en', true || 'is_active->id', true)->get();

        $culturals = $visitings->where('category_visit', 'Cultural');
        $culinarys = $visitings->where('category_visit', 'Culinary');

        return view('livewire.pages.visiting', ['culturals' => $culturals, 'culinarys' => $culinarys]);
    }
}

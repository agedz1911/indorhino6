<?php

namespace App\Livewire\Pages;

use App\Models\accommodation as ModelsAccommodation;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Accommodation - 6th INDORHINO Congress')]
class Accommodation extends Component
{
    public function render()
    {
        $accommodations = ModelsAccommodation::where('is_active->en', true || 'is_active->id', true)->get();
        // $accommodations = ModelsAccommodation::all();
        return view('livewire.pages.accommodation', ['accommodations' => $accommodations]);
    }
}

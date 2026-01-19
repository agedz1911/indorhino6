<?php

namespace App\Livewire\Pages;

use App\Models\tour as ModelsTour;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Tour - 6th INDORHINO Congress')]
class Tour extends Component
{
    public $tours;
    public $sports;

    public function mount()
    {
        $social = ModelsTour::all();
        $this->tours = $social->where('category', 'Tour')->where('is_active', true);
        $this->sports = $social->where('category', 'Sport');
    }

    public function render()
    {

        return view('livewire.pages.tour');
    }
}

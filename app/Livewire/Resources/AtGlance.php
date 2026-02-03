<?php

namespace App\Livewire\Resources;

use App\Models\AtGlance as ModelsAtGlance;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Program at Glance - 6th INDORHINO Congress')]
class AtGlance extends Component
{
    public $duadelapan;

    public function mount()
    {
        $atglances = ModelsAtGlance::all();
        $this->duadelapan = $atglances->where('date', '2026-06-04')->sortBy('no_urut');
    }

    public function render()
    {
        return view(
            'livewire.resources.at-glance',
        );
    }
}

<?php

namespace App\Livewire\Pages;

use App\Models\Sponsor as ModelsSponsor;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Sponsors - KONAS XX PERHATI-KL')]
class Sponsor extends Component
{
    public function render()
    {
        $sponsors = ModelsSponsor::where('is_active', true)->orderBy('no_urut', 'asc')->get();
        return view('livewire.pages.sponsor', ['sponsors' => $sponsors]);
    }
}

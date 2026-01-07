<?php

namespace App\Livewire\Resources;

use App\Models\Flayer as ModelsFlayer;
use Livewire\Component;

class Flayer extends Component
{
    public function render()
    {
        $flayers = ModelsFlayer::where('is_active', true)->get();
        return view('livewire.resources.flayer', [
            'flayers' => $flayers,
            'hasActiveFlyers' => $flayers->isNotEmpty()
        ]);
    }
}

<?php

namespace App\Livewire\Resources;

use App\Models\AtGlance as ModelsAtGlance;
use Livewire\Component;

class AtGlance extends Component
{
    public $duadelapan;
    public $duasembilan;
    public $tigapuluh;
    public $tigapuluhsatu;
    public $satu;


    public function mount()
    {
        $atglances = ModelsAtGlance::all();
        $this->duadelapan = $atglances->where('date', '2026-06-04')->sortBy('no_urut');
        $this->duasembilan = $atglances->where('date', '2025-10-29')->sortBy('no_urut');
        $this->tigapuluh = $atglances->where('date', '2025-10-30')->sortBy('no_urut');
        $this->tigapuluhsatu = $atglances->where('date', '2025-10-31')->sortBy('no_urut');
        $this->satu = $atglances->where('date', '2025-11-01')->sortBy('no_urut');
    }

    public function render()
    {
        return view(
            'livewire.resources.at-glance',
        );
    }
}

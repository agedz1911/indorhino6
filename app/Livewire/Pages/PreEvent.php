<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class PreEvent extends Component
{
    public $preEvents;

    public function mount()
    {
        $this->preEvents = \App\Models\Praevent::where('is_active', true)->orderBy('no_urut')->get();
    }
    
    public function render()
    {
        return view('livewire.pages.pre-event');
    }
}

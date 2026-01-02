<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;


#[Title('Congress Information - KONAS XX PERHATI-KL')]

class CongressInformation extends Component
{    
    public function render()
    {
        return view('livewire.pages.congress-information');
    }
}

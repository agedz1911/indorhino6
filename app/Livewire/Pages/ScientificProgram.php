<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Scientific Program - KONAS XX PERHATI-KL')]
class ScientificProgram extends Component
{
    public function render()
    {
        return view('livewire.pages.scientific-program');
    }
}

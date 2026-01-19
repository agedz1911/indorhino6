<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Scientific Program - 6th INDORHINO Congress')]
class ScientificProgram extends Component
{
    public function render()
    {
        return view('livewire.pages.scientific-program');
    }
}

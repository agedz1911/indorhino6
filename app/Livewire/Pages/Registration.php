<?php

namespace App\Livewire\Pages;

use App\Models\Registration as ModelsRegistration;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Registration - KONAS XX PERHATI-KL')]
class Registration extends Component
{
    public function render()
    {
        $registrations = ModelsRegistration::all();
        return view('livewire.pages.registration', ['registrations' => $registrations]);
    }
}

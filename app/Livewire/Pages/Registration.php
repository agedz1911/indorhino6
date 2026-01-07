<?php

namespace App\Livewire\Pages;

use App\Models\Registration as ModelsRegistration;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Registration - 6th INDORHINO Congress')]
class Registration extends Component
{
    public function render()
    {
        $registrations = ModelsRegistration::all();
        // $regLocals = ModelsRegistration::where('wilayah_reg->id', 'indonesia')->get();
        $regLocals = ModelsRegistration::where('wilayah_reg->en', 'indonesia')->get();
        $regForeigns = ModelsRegistration::where('wilayah_reg->id', 'foreign')->get();
        $uniqueLocals = $regLocals->pluck('category')->unique();
        $uniqueForeigns = $regForeigns->pluck('category')->unique();
        return view('livewire.pages.registration', [
            'regLocals' => $regLocals, 
            'regForeigns' => $regForeigns,
            'uniqueLocals' => $uniqueLocals,
            'uniqueForeigns' => $uniqueForeigns,
            'registrations' => $registrations,
        ]);
    }
}

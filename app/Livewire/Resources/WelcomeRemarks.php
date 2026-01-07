<?php

namespace App\Livewire\Resources;

use App\Models\WelcomeMessage;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Welcome Remarks - 6th INDORHINO Congress')]
class WelcomeRemarks extends Component
{
    public function render()
    {
        $messages = WelcomeMessage::where('is_active', 1)->orderBy('no_urut', 'asc')->get();
        return view('livewire.resources.welcome-remarks', ['messages' => $messages]);
    }
}

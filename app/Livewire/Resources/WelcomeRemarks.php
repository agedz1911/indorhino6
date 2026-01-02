<?php

namespace App\Livewire\Resources;

use App\Models\WelcomeMessage;
use Livewire\Component;

class WelcomeRemarks extends Component
{
    public function render()
    {
        $messages = WelcomeMessage::where('is_active', 1)->orderBy('no_urut', 'asc')->get();
        return view('livewire.resources.welcome-remarks', ['messages' => $messages]);
    }
}

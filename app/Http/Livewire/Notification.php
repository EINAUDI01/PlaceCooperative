<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Notification extends Component
{
    
    public function PageNotification()
    {
        if(auth()->user()->unreadNotifications->isNotEmpty())
        {
            return redirect()->route('profile.AfficherPageDeNotification');
        }
        else
        {
            dd('Liste de notification');
        }
    }

    public function render()
    {
        return view('livewire.notification');
    }
}

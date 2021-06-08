<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Notification extends Component
{
    //Fonction en lien avec la vue notification.blade.php
    public function PageNotification()
    {
        //Cette fonction vérifie s'il y a des notifications non lus
        if(auth()->user()->unreadNotifications->isNotEmpty())
        {
            //Si c'était le cas, on affiche la page de notification
            return redirect()->route('profile.AfficherPageDeNotification');
        }
        else
        {
            //Dans le cas contraire, on affiche une liste des notifications déjà lues
            dd('Liste de notification');
        }
    }

    //Cette fonction est celle qui permet de renvoyer la vue livewire notification.blade.php lorsqu'elle est appelé dans une vue template
    public function render()
    {
        return view('livewire.notification');
    }
}

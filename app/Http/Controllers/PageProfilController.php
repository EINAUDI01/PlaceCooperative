<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\NotificationUtilisateur;

class PageProfilController extends Controller
{
    //
    public function AfficherPageDeProfil(User $id)
    {
        $id->notify(new NotificationUtilisateur(auth()->user()));
        return view('profile.AfficherPageDeProfil', ['user' => $id]);
    }
}

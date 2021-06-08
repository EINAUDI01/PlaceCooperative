<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\NotificationUtilisateur;

class PageProfilController extends Controller
{
    //Cette fonction est associée à la vue qui est renvoyée lorsqu'un utilisateur recherche un autre
    public function AfficherPageDeProfil(User $id)
    {
        //La variable id contient la valeur de l'id de l'utilisateur dont on consulte le profil. C'est à cet utilisateur qu'il faut notifier la consultation de profil par un utilisateur.
        //Donc avec le auth()->user() on renvoie  l'utilisateur qui a consulté à la classe de notification
        $id->notify(new NotificationUtilisateur(auth()->user()));
        return view('profile.AfficherPageDeProfil', ['user' => $id]);
    }
}

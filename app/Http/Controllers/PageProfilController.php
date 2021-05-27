<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageProfilController extends Controller
{
    //
    public function AfficherPageDeProfil(User $id)
    {
        return view('profile.AfficherPageDeProfil', ['user' => $id]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class PageNotificationController extends Controller
{
    //
    public function AfficherPageDeNotification()
    {
        return view('profile.AfficherPageDeNotification');
    }

}

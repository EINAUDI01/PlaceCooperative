<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PageProfilController;
use App\Http\Controllers\PageNotificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//
Route::get('/Formation', function () {
    return view('profile.Formation');
})->name('Formation');

//Route /NosCoopérateur nommé NosCoopérateurs permet d'accéder à la page relative aux coopérateurs
Route::get('/Noscooperateurs', function () {
    return view('profile.NosCooperateurs');
})->name('NosCooperateurs');

//Route /CompléterProfil nommé CompleterProfil permet d'envoyer la page pour compléter les profils
//Elle est accessible seulement si l'utilisateur est connecté
Route::middleware(['auth:sanctum', 'verified'])->get('/CompleterProfil', function () {
    return view('profile.CompleterProfil');
})->name('CompleterProfil');

Route::middleware(['auth:sanctum', 'verified'])->post('/CompleterProfil', [Controller::class, 'EnregistrementCompleterProfilbb'])->name('Controller.EnregistrementCompleterofil');

Route::middleware(['auth:sanctum', 'verified'])->get('/Infos', function () {
    return view('profile.InformationsProfil');
})->name('InformationsProfil');

Route::get('/PageDeProfil/{id}', [PageProfilController::class, 'AfficherPageDeProfil'])->middleware('auth')->name('profile.AfficherPageDeProfil');

Route::get('/PageDeNotification', [PageNotificationController::class, 'AfficherPageDeNotification'])->middleware('auth')->name('profile.AfficherPageDeNotification');
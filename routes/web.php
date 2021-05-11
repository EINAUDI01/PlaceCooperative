<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//
Route::middleware(['auth:sanctum', 'verified'])->get('/Formation', function () {
    return view('profile.Formation');
})->name('Formation');

Route::middleware(['auth:sanctum', 'verified'])->get('/Noscooperateurs', function () {
    return view('profile.NosCooperateurs');
})->name('NosCooperateurs');

Route::middleware(['auth:sanctum', 'verified'])->get('/CompleterProfil', function () {
    return view('profile.CompleterProfil');
})->name('CompleterProfil');
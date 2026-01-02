<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\PairingController;
use App\Http\Controllers\RoundController;
use App\Http\Controllers\TournamentController;

Route::view('/', 'welcome');

Route::get('/login_test', function (){
    return view('login_test');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/Tournaments/{tournament}/csv', [TournamentController::class, 'csv'])
    ->name('Tournaments.csv');

Route::get('/about', function (){
    return view('about');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified']) 
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::resource('posts', PostController::class);

Route::resource('Players', PlayersController::class);

Route::resource('Pairings', PairingController::class);

Route::resource('Rounds', RoundController::class);

Route::resource('Tournaments', TournamentController::class);




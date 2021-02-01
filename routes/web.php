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
Route::get('/discord', function () {
    return redirect('https://discord.gg/m4cEJwqc6D');
});
Route::view('/','pages.landingpage');
Route::view('/impressum', 'pages.impressum');
Route::view('/datenschutz', 'pages.datenschutz');
Route::view('/join', 'pages.join');
Route::prefix('gamemode')->group(function () {
    Route::view('/skywars', 'pages.gamemodes.skywars');
    Route::view('/knock-knock', 'pages.gamemodes.knockknock');
    Route::view('/bingo', 'pages.gamemodes.bingo');
    Route::view('/lobby/map', 'pages.gamemodes.lobby.map');

});



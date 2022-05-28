<?php

use App\Http\Controllers\SummonerController;
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

Route::get('/', [SummonerController::class, 'index'])->name('summoner');
Route::get('profile/{serverName}/{summonerName}', [SummonerController::class, 'profile'])->name('summoner.profile');

/*Route::get('/', function () {
    return view('welcome');
});*/

<?php

use App\Http\Controllers\LandingController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', LandingController::class);
Route::get('players', [LandingController::class, 'players'])->name('landing.players');
Route::get('managers', [LandingController::class, 'managers'])->name('landing.managers');
Route::get('clubs', [LandingController::class, 'clubs'])->name('landing.clubs');
Route::get('stadiums', [LandingController::class, 'stadiums'])->name('landing.stadiums');
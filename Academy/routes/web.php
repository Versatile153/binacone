<?php

use App\Http\Controllers\PollingsUnits;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//fetch all pollins result
Route::get('/total',[PollingsUnits::class,'total']);

Route::get('/dash',[PollingsUnits::class,'dash']);
Route::get('/totals',[PollingsUnits::class,'party_total_scores']);
Route::post('/results', [PollingsUnits::class, 'party_total_scores'])->name('results');

Route::post('/polling-units', [PollingsUnits::class, 'store']);



Route::get('/create_results', [PollingsUnits::class, 'create']);










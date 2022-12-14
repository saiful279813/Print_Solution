<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeedController;
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

Route::get('/', [SeedController::class, 'seedList'])->name('seed.list');
Route::any('/seed/list/pdf', [SeedController::class, 'listSeederpdf'])->name('seed.list.pdf');
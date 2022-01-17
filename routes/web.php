<?php

use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
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

Route::get('/', SiswaController::class);

Route::post("siswa/store", [SiswaController::class, "store"])->name("siswa.store");

Route::get("siswa/destroy/{id}", [SiswaController::class, "destroy"])->name("siswa.destroy");

Route::post("siswa/update", [SiswaController::class, "update"])->name("siswa.update");

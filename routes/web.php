<?php

//use Illuminate\Support\Facades\Route;<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\Jenis_KelaminController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use App\Http\Controllers\KontakController;
/*
use App\Http\Controllers\KontakController;
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
Route::get('/', [DesaController::class, 'index'])->name('index');
Route::post('/desa/{id}', [DesaController::class, 'store'])->name('desa.store');

Route::get('/jeniskelamin', [Jenis_KelaminController::class, 'index']);
Route::get('/jeniskelamin/1', [Jenis_KelaminController::class, 'store'])->name('jenis_kelamin.store');

Route::resource('desa', DesaController::class);
Route::resource('jenis-kelamin', Jenis_KelaminController::class);

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

// Route::get('/', function () {
//     return view('welcome');
// });

<?php

use App\Http\Controllers\ClusterController;
use App\Http\Controllers\dashboard\PendaftaranController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TitikSelamController;
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
    return view('frontend.home');
});

Route::resource('/pendaftaran', RegisterController::class);

// routes/web.php
Route::get('/selectCluster/{clusterId}', [TitikSelamController::class, 'selectCluster'])->name('selectCluster');

Route::middleware('auth')->group(function (){
    Route::get('home', function(){
        return view('dashboard.home');
    })->name('home');
    
    Route::prefix('dashboard')->group(function () {
        Route::get('/registrasi', [PendaftaranController::class, 'index'])->name('registrasi');
    });
});







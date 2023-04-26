<?php

use App\Http\Livewire\ExtraescolarActivity;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
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

Route::get('/extraescolaractivity', function () {
    return view('livewire/extraescolaractivity');
});

Route::get('/autorizacionFamiliar', function () {
    return view('livewire/autorizacion-familiar');
});

Route::post('/extraescolaractivity',[ExtraescolarActivity::class, 'store']);

Route::get('/pdf', [PDFController::class, 'generatePDF']);

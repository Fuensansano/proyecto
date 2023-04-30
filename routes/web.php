<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PDFController;

use App\Http\Livewire\{ExtraescolarActivity, FamilyAuthorization};

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

Route::get('/familyAuthorization', function () {
    return view('livewire/familyAuthorization');
})->name('authFamForm');

Route::post('/extraescolaractivity',[ExtraescolarActivity::class, 'store']);

Route::post('/familyAuthorization', [FamilyAuthorization::class, 'generatePDF'])
    ->name('generarPDF');

/* Route::get('/pdf', [PDFController::class, 'generatePDF']);
 */
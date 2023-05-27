<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\{ExtraescolarActivity, FamilyAuthorization, ProofMissingTeacher};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/extracurricular-activity', function () {
    return view('livewire/extraescolaractivity');
});

Route::get('/family-authorization', function () {
    return view('livewire/familyAuthorization');
})->name('authFamForm');

Route::get('/proof-missing-teacher', function () {
    return view('livewire/proofMissingTeacher');
});

/*Route::get('/clausesIndex', function () {
    return view('clausesIndex');
});*/

Route::post('/extraescolar-activity',[ExtraescolarActivity::class, 'store']);

Route::post('/family-authorization', [FamilyAuthorization::class, 'generatePDF'])
    ->name('generatePDF');

Route::post('/proof-missing-teacher', [ProofMissingTeacher::class, 'generatePDF'])
    ->name('generatePDF2');

/* Route::get('/pdf', [PDFController::class, 'generatePDF']);
 */

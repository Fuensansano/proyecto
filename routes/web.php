<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\{ExtracurricularActivity, FamilyAuthorization, ProofMissingTeacher};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/extracurricular-activity', function () {
    return view('livewire/extracurricularActivity');
});

Route::get('/family-authorization', function () {
    return view('livewire/familyAuthorization');
});

Route::get('/proof-missing-teacher', function () {
    return view('livewire/proofMissingTeacher');
});

/*Route::get('/clausesIndex', function () {
    return view('clausesIndex');
});*/

Route::post('/extracurricular-activity',[ExtracurricularActivity::class, 'store']);

Route::post('/family-authorization', [FamilyAuthorization::class, 'generatePDF'])
    ->name('generatePDF');

Route::post('/proof-missing-teacher', [ProofMissingTeacher::class, 'generatePDF'])
    ->name('generatePDF2');

/* Route::get('/pdf', [PDFController::class, 'generatePDF']);
 */

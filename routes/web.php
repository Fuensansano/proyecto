<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\{ExtracurricularActivity, FamilyAuthorization, ProofMissingTeacher};

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/extracurricular-activity', function () {
//    return view('livewire/extracurricularActivity');
//});

Route::get('/extracurricular-activity', [ExtracurricularActivity::class, 'render']);

Route::get('/family-authorization', function () {
    return view('livewire/familyAuthorization');
});

Route::get('/proof-missing-teacher', function () {
    return view('livewire/proofMissingTeacher');
});

Route::post('/extracurricular-activity', [ExtracurricularActivity::class, 'store']);

Route::post('/family-authorization', [FamilyAuthorization::class, 'store']);

Route::post('/proof-missing-teacher', [ProofMissingTeacher::class, 'store']);

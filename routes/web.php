<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\{ExtracurricularActivity, FamilyAuthorization, ProofMissingTeacher};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/extracurricular-activity', static function () {
    return view('livewire/extracurricularActivity');
});

Route::get('/family-authorization', static function () {
    return view('livewire/familyAuthorization');
});

Route::get('/proof-missing-teacher', static function () {
    return view('livewire/proofMissingTeacher');
});

Route::post('/extracurricular-activity', [ExtracurricularActivity::class, 'store']);

Route::post('/family-authorization', [FamilyAuthorization::class, 'store']);

Route::post('/proof-missing-teacher', [ProofMissingTeacher::class, 'store']);

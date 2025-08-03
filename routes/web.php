<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::redirect('/', '/application/choices');

Route::view('/application/choices', 'application.choices')->name('application.choices');
Route::post('/application/choices', fn() => redirect()->route('application.personal-info'))->name('application.choices.post');

Route::view('/application/personal-info', 'application.personal-info')->name('application.personal-info');
Route::post('/application/personal-info', function (Request $request) {
    session(['physical_disability' => $request->input('physical_disability', 'No')]);
    return redirect()->route('application.documents');
})->name('application.personalInfo.post');

Route::view('/application/documents', 'application.documents')->name('application.documents');
Route::post('/application/documents', fn() => redirect()->route('application.consent'))->name('application.documents.post');

Route::view('/application/consent', 'application.consent')->name('application.consent');
Route::post('/application/consent', function (Request $request) {
    return redirect()->route('application.success');
})->name('application.consent.post');


Route::view('/application/success', 'application.success')->name('application.success');
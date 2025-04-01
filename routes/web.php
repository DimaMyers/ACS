<?php

use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/acs', [PersonController::class, 'index'])->name('person.index');
Route::get('/acs/add', function () {
    return view('acs-add');
})->name('person.add');


Route::post('/acs/add', [PersonController::class, 'store'])->name('person.store');
Route::delete('/acs/add', [PersonController::class, 'destroy'])->name('person.destroy');

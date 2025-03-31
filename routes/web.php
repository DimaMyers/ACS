<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get('/', function () {
    return view('home');
});

Route::get('/acs', [PersonController::class, 'index']);
Route::get('/acs/add', function () {
    return view('acs-add');
});



Route::post('/acs/add', [PersonController::class, 'store']);
Route::delete('/acs/add', [PersonController::class, 'destroy']);

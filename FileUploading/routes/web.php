<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

Route::get('/', function () {
    return view('Upload');
});
Route::post('/upload',[FileController::class,'upload']);    

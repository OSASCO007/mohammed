<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); 
});
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'showStudents']);

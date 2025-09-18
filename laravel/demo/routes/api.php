<?php

use App\Http\Controllers\API\StudentController;
// use App\Http\Controllers\StudentController as ControllersStudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::get('/students',[StudentController::class,'index'])->name('students.index');
Route::apiResource('students', StudentController::class);

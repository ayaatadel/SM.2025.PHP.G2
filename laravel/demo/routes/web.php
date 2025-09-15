<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/students',[StudentController::class,'allStudentsData']);
/**
 *   #items: array:2 [▼
*    0 => {#269 ▼
*      +"id": 1
*      +"name": "mohammed"
*      +"email": "mohammed@gmail.com"
*      +"gender": "male"
*    }
*    1 => {#268 ▼
*      +"id": 2
*      +"name": "mahmoud"
*      +"email": "mahmoud@gmail.com"
*      +"gender": "male"
*    }
*  ]
 */

//
Route::get('/students',[StudentController::class,'index'])->name('students.index');

Route::get('/students/{id}',[StudentController::class,'show'])->name('students.show');

Route::delete('/students/{id}',[StudentController::class,'destroy'])->name('students.destroy');

<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('index', [IndexController::class, 'index']);

Route::get('database', [IndexController::class, 'show']);

Route::get('persons', [IndexController::class, 'getPersons']);
Route::get('persons/{id_person}', [IndexController::class, 'getPerson']);

Route::get('person/create', [IndexController::class, 'create']);
Route::post('person', [IndexController::class, 'addPerson']);

//update
Route::get('persons/{id_person}/edit', [IndexController::class,'update']);
Route::put('person/{id_person}',[IndexController::class,'updatePersonByID']);

//delete
Route::delete('persons/{id_person}/delete',[IndexController::class,'deletePersonById']);
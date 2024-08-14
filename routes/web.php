<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\PersonController;
use App\Http\Controllers\Frontend\PersonFormController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\UserFormController;
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

//user
Route::get('login', [UserFormController::class, 'login']);
Route::get('logout', [UserController::class, 'logout']);
Route::post('authenticate', [UserController::class, 'authenticate']);


//In this part we will to use all about our little CRUD

Route::middleware(['verify'])->group(function () {
    Route::get('persons', [PersonController::class, 'getAll']);
    Route::get('persons/{id_person}', [PersonController::class, 'getById']);

    //Create
    Route::get('person/create', [PersonFormController::class, 'create']);
    Route::post('person', [PersonController::class, 'add']);

    //update
    Route::get('persons/{id_person}/edit', [PersonFormController::class, 'edit']);
    Route::put('person/{id_person}', [PersonController::class, 'updateById']);

    //delete
    Route::delete('persons/{id_person}/delete', [PersonController::class, 'deleteByid']);
});
//read


//session

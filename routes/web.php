<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//defining/calling the controller in laravel 6/7
//Route::get('users', 'Users@index'); //Route::get('path', 'Usercontrollername@functionname');

//in laravel 8 
//first import laravel controller by use App\Http|Controller\Users;
//Route::get('path',[Users::class, 'functionname']);

Route::get('students/{student}', [StudentController::class, 'index']);

Route::get("users", [UserController::class, 'viewLoad']);

Route::get('/user/{name}', function ($name) {  //anonymous function because no name
    return view('welcome', ['user'=>$name]);
});

Route::view('/', 'welcome'); //short syntax but you cannot pass data from url to view
Route::view('inner', 'inner'); //can be /inner
Route::view('header', 'header'); //can be header

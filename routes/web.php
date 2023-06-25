<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/panel')->group(function (){
    Route::get('/',function (){
        return view('Panel.index');
    });
    Route::prefix('characters')->group(function (){
        Route::get('new' , function (){
            return view('Panel.characters.new');
        });
    });
});


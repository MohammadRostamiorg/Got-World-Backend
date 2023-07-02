<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\CharactersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded b   y the RouteServiceProvider and all of them will
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
        Route::get('/',[CharactersController::class,'showAll']);
        Route::get('new' , function (){
            return view('Panel.characters.new');

        });

        Route::post('store',[CharactersController::class,'store'])->name('character.store');
    });
});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\CharactersController;
use App\Http\Controllers\Panel\HousesController;
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
    return redirect('/panel');
});
Route::prefix('/panel')->group(function () {
    Route::get('/', function () {
        return view('Panel.index');
    });
    Route::prefix('characters')->group(function () {
        Route::get('/', [CharactersController::class, 'showAll']);
        Route::get('new', function () {
            return view('Panel.characters.new');

        });


        Route::get('/edit/{id}', [CharactersController::class, 'editCharacter']);

        Route::post('store', [CharactersController::class, 'store'])->name('character.store');
        Route::post('editStore', [CharactersController::class, 'editStore'])->name('character.editStore');
    });



    Route::prefix('houses')->group(function () {
        Route::get('/', [HousesController::class, 'showAll']);
        Route::get('new', function () {
            return view('Panel.houses.new');

        });


        Route::get('/edit/{id}', [HousesController::class, 'editHouse']);

        Route::post('store', [HousesController::class, 'store'])->name('house.store');
        Route::post('editStore', [HousesController::class, 'editStore'])->name('house.editStore');
    });
});


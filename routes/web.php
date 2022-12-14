<?php

use App\Http\Controllers\SeasonController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/series');
});

Route::controller(SeriesController::class)->group(function () {
    Route::get("/series", 'index')->name("series.index");
    Route::get("/series/create", 'create')->name("series.create");
    Route::get("/series/{id}/edit", 'edit')->name('series.edit');
    Route::post("/series/store", 'store')->name("series.store");
    Route::put("/series/{id}", 'update')->name("series.update");
    Route::delete("/series/destroy/{id}", 'destroy')->name("series.destroy");
});

Route::get('/series/{series}/seasons', [SeasonController::class, 'index'])->name('seasons.index');

//Route::resource("/series", SeriesController::class); //- Possível utilizar quando as nomenclaturas seguem o padrão do Laravel

//Route::get("/series", [SeriesController::class, 'index']);
//Route::get("/series/criar", [SeriesController::class, 'create']);
//Route::post("/series/salvar", [SeriesController::class, 'store']);

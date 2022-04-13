<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MainController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::post('logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

Route::group(['prefix' => 'main', 'middleware' => 'auth:sanctum'], function (){
    Route::get('/master', [MainController::class, 'master'])->name('main.master');
    Route::get('/master/{id}', [MainController::class, 'showById'])->name('main.master.show');
    Route::get('/master/name/{name}', [MainController::class, 'showByName'])->name('main.master.show.name');
    Route::get('/master/sort/{value}/asc', [MainController::class, 'sortAsc'])->name('main.sort.asc');
    Route::get('/master/sort/{value}/desc', [MainController::class, 'sortDesc'])->name('main.sort.desc');
});

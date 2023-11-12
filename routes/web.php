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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OutfitController;
use App\Http\Controllers\ArchieveController;

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

Route::get('/',[HomeController::class,'home']);
Route::get('/outfit/list',[OutfitController::class,'list'])->name('outfit.list');
Route::get('/outfit/form',[OutfitController::class,'form']);
Route::post('/outfit/store',[OutfitController::class,'store'])->name('outfit.store');
Route::get('/archieve/list',[ArchieveController::class,'list'])->name('archieve.list');
Route::get('/archieve/form',[ArchieveController::class,'form']);
Route::post('/archieve/store',[ArchieveController::class,'store'])->name('archieve.store');





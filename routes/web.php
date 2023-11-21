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
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\OutfitController;
use App\Http\Controllers\Backend\ArchieveController;
use App\Http\Controllers\Backend\WaredrobeController;
use App\Http\Controllers\Backend\FashionnewsController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
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

//website route
Route::get('/',[FrontendHomeController::class,('home')])->name('home');





















//admin panel
Route::group(['prefix' => 'admin'], function () {

Route::get('/login', [UserController::class, 'loginForm'])->name('admin.login');
Route::post('/login-form-post', [UserController::class, 'loginPost'])->name('admin.login.post');

//Route::group(['middleware' => 'auth'], function () {
        
 Route::get('/logout', [UserController::class, 'logout'])->name('admin.logout');



 Route::get('/',[HomeController::class,'home'])->name('dashboard');
Route::get('/outfit/list',[OutfitController::class,'list'])->name('outfit.list');
Route::get('/outfit/form',[OutfitController::class,'form'])->name('outfit.form');
Route::post('/outfit/store',[OutfitController::class,'store'])->name('outfit.store');
Route::get('/outfit/delete/{id}',[OutfitController::class, 'delete'])->name('outfit.delete');
Route::get('/outfit/edit/{id}',[OutfitController::class,'edit'])->name('outfit.edit');
Route::put('/outfit/update/{$id}',[OutfitController::class,'update'])->name('outfit.update');
Route::get('/archieve/list',[ArchieveController::class,'list'])->name('archieve.list');
Route::get('/archieve/form',[ArchieveController::class,'form']);
Route::post('/archieve/store',[ArchieveController::class,'store'])->name('archieve.store');
Route::get('/waredrobe/list',[WaredrobeController::class,'list'])->name('waredrobe.list');
Route::get('/waredrobe/form',[WaredrobeController::class,'form'])->name('waredrobe.form');
Route::post('/waredrobe/store',[WaredrobeController::class,'store'])->name('waredrobe.store');
Route::get('/fashionnews/list',[FashionnewsController::class,'list'])->name('fashionnews.list');
});
//});

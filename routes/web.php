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
use App\Http\Controllers\Backend\FashionshowController;
use App\Http\Controllers\Backend\DesignerController;
use App\Http\Controllers\Backend\DesignController;
use App\Http\Controllers\Backend\VoteController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\UserController as FrontendUserController;
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
Route::get('/',[FrontendHomeController::class,'home'])->name('home');


Route::get('/registration',[FrontendUserController::class,'registration'])->name('user.registration');
Route::post('/registration',[FrontendUserController::class,'doregistration'])->name('user.store');
Route::get('/login',[FrontendUserController::class,'login'])->name('user.login');
Route::post('/login', [FrontendUserController::class,'doLogin'])->name('user.do.login');
Route::get('/profile', [FrontendUserController::class, 'profile'])->name('profile.view');
Route::group(['middleware' => 'auth'], function () {
Route::get('/logout', [FrontendUserController::class, 'logout'])->name('user.logout');
});



















//admin panel
Route::group(['prefix' => 'admin'], function () {

Route::get('/login', [UserController::class, 'loginForm'])->name('admin.login');
Route::post('/login-form-post', [UserController::class, 'loginPost'])->name('admin.login.post');

Route::group(['middleware' => 'auth'], function () {
        
 Route::get('/logout', [UserController::class, 'logout'])->name('admin.logout');



Route::get('/',[HomeController::class,'home'])->name('dashboard');

Route::get('/users', [UserController::class, 'list'])->name('users.list');
Route::get('/users/create', [UserController::class, 'createForm'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');


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
//Route::get('/fashionnews/list',[FashionnewsController::class,'list'])->name('fashionnews.list');

Route::get('/fashionshow/list',[FashionshowController::class,'list'])->name('fashionshow.list');
Route::get('/fashionshow/form',[FashionshowController::class,'form'])->name('fashion.form');
Route::post('/fashionshow/store',[FashionshowController::class,'store'])->name('fashion.store');


Route::get('/designers/create', [DesignerController::class, 'create'])->name('designers.create');
Route::post('/designers', [DesignerController::class, 'store'])->name('designers.store');
Route::get('/designers/{designer}', [DesignerController::class, 'show'])->name('designers.show');



// Add additional routes for editing, updating, and deleting designer profiles


//Route::middleware('auth')->post('/designs/{id}/vote', 'VoteController@vote')->name('designs.vote');
// routes/web.php

//Route::get('/designs', 'DesignController@showDesigns')->name('designs.index');
// routes/web.php

//te::middleware('auth')->group(function () {
    //Route::get('/designs/submit', 'DesignController@showSubmitForm')->name('designs.submit');
    //Route::post('/designs/submit', 'DesignController@submitDesign');
//});

//  Route::get('/design/showdesign',[DesignController::class,'list'])->name('design.list');
//  Route::get('/design/form',[DesignController::class,'form']);
//  Route::post('/design/submitdesign',[DesignController::class,'submitdesign'])->name('design.submit');
//  Route::post('/design/{id}/vote',[VoteController::class,'vote'])->name('desingns.vote');

});
});

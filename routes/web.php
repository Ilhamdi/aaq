<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\KontakController;


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

// Route::get('/', function () {
//     //return view('welcome');
//     return view('beranda');
// });
Route::get('/', function () {
    //return view('welcome');
    return view('underconstruction');
});
Route::get('/contact', function () {
    //return view('welcome');
    return view('contact');
});

if (file_exists(app_path('Http/Controllers/LocalizationController.php')))
{
    Route::get('lang/{locale}', [App\Http\Controllers\LocalizationController::class , 'lang']);
    Route::get('/lang/{locale}', [App\Http\Controllers\LocalizationController::class , 'lang']);
}

Route::get('/beranda',[ContentController::class,'beranda']);
Route::get('/about',[ContentController::class,'tentang']);
//services
Route::get('/liveEvent',[ContentController::class,'services']);
Route::get('/postProduction',[ContentController::class,'postProduction']);
Route::get('/videoProduction',[ContentController::class,'videoProduction']);

//portofolio
Route::get('/portodiplay',[PortoController::class,'portodiplay']);
// Route::get('/about',function(){
//     return view('tentang');
// });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('kontak',KontakController::class);
Route::group(['middleware' => ['auth']], function() {
    Route::resource('client',ClientController::class);
    Route::resource('content',ContentController::class);
    Route::resource('porto',PortoController::class);
    Route::get('/getContent/{name?}',[ContentController::class,'getContent']);
    

    Route::get('/addImage/{id}',[PortoController::class,'addImage'])->name('addImage');
    Route::post('/storeImage',[PortoController::class,'storeImage'])->name('storeImage');

    

});

<?php

use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ItineraireController;


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



Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:chauffeur'])->group(function () {
  
    Route::get('/chauffeur/home', [HomeController::class, 'chauffeurHome'])->name('chauffeur.home');
});

Route::get('/region/create', [RegionController::class, 'create'])->name('regions.create');
Route::post('/region/store', [RegionController::class, 'store'])->name('regions.store');
Route::get('/regions', [RegionController::class, 'index'])->name('regions.index');
Route::delete('/regions/{region}', [RegionController::class, 'destroy'])->name('regions.destroy');
Route::get('/regions/{region}', [RegionController::class, 'show'])->name('regions.show');
Route::get('/regions/{region}/edit', [RegionController::class, 'edit'])->name('regions.edit');

Route::put('/regions/{region}', [RegionController::class, 'update'])->name('regions.update');


Route::resource('itineraire', ItineraireController::class);
Route::resource('chauffeur', ChauffeurController::class);



Route::resource('clients','App\Http\Controllers\ClientController') ;



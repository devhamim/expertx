<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// frontend
Route::get('/', [FrontendController::class, 'home']);
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/protfolio', [FrontendController::class, 'protfolio'])->name('protfolio');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/contect', [FrontendController::class, 'contect'])->name('contect');

Auth::routes();

// backend
Route::get('/home', [HomeController::class, 'index'])->name('index');
        Route::resources([
            'setting'      => SettingController::class,
        ]);

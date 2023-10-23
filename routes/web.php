<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\clientsController;
use App\Http\Controllers\CustomerSayController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
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
Route::get('/about-us', [FrontendController::class, 'about_us'])->name('about_us');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/our-portfolio', [FrontendController::class, 'our_portfolio'])->name('our.portfolio');
Route::get('/our-blog', [FrontendController::class, 'our_blog'])->name('our.blog');
Route::get('/contect', [FrontendController::class, 'contect'])->name('contect');

Auth::routes();

// backend
Route::get('/home', [HomeController::class, 'index'])->name('index');
        Route::resources([
            'setting'      => SettingController::class,
            'feature'      => FeatureController::class,
            'about'        => AboutController::class,
            'team'         => TeamController::class,
            'customerSay'  => CustomerSayController::class,
            'client'       => clientsController::class,
            'portfolios'   => PortfolioController::class,
            'blog'         => BlogController::class,
            'service'      => ServiceController::class,
        ]);

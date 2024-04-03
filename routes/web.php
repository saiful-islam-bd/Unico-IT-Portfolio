<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendController;

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
Route::get('/', [FrontendController::class,'index'])->name('home_about_us');
Route::get('/about', [Controller::class,'about'])->name('about');
Route::get('/contact', [Controller::class,'contact'])->name('contact');
Route::get('/service/{title}', [FrontendController::class,'service'])->name('service');

// Services
Route::get('/software', [Controller::class,'software'])->name('software');
Route::get('/website', [Controller::class,'website'])->name('website');
Route::get('/graphics', [Controller::class,'graphics'])->name('graphics');
Route::get('/seo', [Controller::class,'seo'])->name('seo');
Route::get('/social', [Controller::class,'social'])->name('social');
Route::get('/content', [Controller::class,'content'])->name('content');
Route::get('/onlinebranding', [Controller::class,'onlinebranding'])->name('onlinebranding');
Route::get('/analysis', [Controller::class,'analysis'])->name('analysis');
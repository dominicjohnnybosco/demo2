<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/project', [FrontendController::class, 'project'])->name('project');
Route::get('/staff', [FrontendController::class, 'staff'])->name('staff');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/post',[FrontendController::class, 'getAllPost'])->name('post');

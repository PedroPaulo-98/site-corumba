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

use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home'])->name('page.home');
Route::get('/sobre', [PagesController::class, 'about'])->name('page.about');
Route::get('/boletim', [PagesController::class, 'bulletim'])->name('page.bulletim');
Route::get('/missoes', [PagesController::class, 'mission'])->name('page.mission');
Route::get('/ministerios', [PagesController::class, 'ministry'])->name('page.ministry');
Route::get('/contatos', [PagesController::class, 'contact'])->name('page.contact');



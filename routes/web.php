<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
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


/* AUTHENTICATION ROUTES */ 
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/auth', [LoginController::class, 'authenticate']);

/* DASHBOARD ROUTES */

Route::get('/dashboard/news', [AdminController::class, 'news'])->middleware('auth:admins');
Route::get('/dashboard/public_procurements', [AdminController::class, 'show_public_procurements'])->middleware('auth:admins');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard/add_news', [AdminController::class, 'show_add_news'])->middleware('auth:admins');
Route::post('/store_news', [AdminController::class, 'store_news'])->name('store_news');
Route::delete('/news/{id}', [AdminController::class, 'destroy'])->name('delete_news');
Route::get('/edit_news', [AdminController::class, 'edit_news'])->name('show_edit_news');
Route::get('/news/{id}/edit', [AdminController::class, 'edit'])->name('edit_news');
Route::put('/news/{id}', [AdminController::class, 'update'])->name('update_news');
Route::get('/dashboard/admins', [AdminController::class, 'show_admins']);
Route::get('/search', [AdminController::class, 'search'])->name('news_search');
Route::get('/dashboard/categories', [AdminController::class, 'show_categories']);
Route::get('/dashboard/categories/add', [AdminController::class, 'add_categories']);
Route::post('/store_categories', [AdminController::class, 'store_categories'])->name('store_categories');
Route::get('/dashboard/categories/{id}/edit', [AdminController::class, 'show_edit_categories'])->name('show_edit_categories');
Route::put('/categories/{id}/edit', [AdminController::class, 'edit_categories'])->name('edit_categories');
Route::delete('/categories/{id}', [AdminController::class, 'destroy_categories'])->name('delete_categories');
Route::get('/events', [AdminController::class, 'show_events'])->middleware('auth:admins');
Route::get('/events/add', [AdminController::class, 'add_events']);
Route::post('/events/store', [AdminController::class, 'store_events'])->name('store_event');
Route::get('/events/{id}/edit', [AdminController::class, 'edit_event'])->name('edit_event');
Route::post('/events/{id}', [AdminController::class, 'update_event'])->name('update_event');
Route::delete('/events/{id}/delete', [AdminController::class, 'destroy_event'])->name('destroy_event');
Route::get('/search_events', [AdminController::class, 'search_event'])->name('events_search');


/* FRONTEND ROUTES */  

Route::get('/', [PageController::class, 'home']);
Route::get('/istorijat', [PageController::class, 'history']);
Route::get('/arheologija', [PageController::class, 'archaeology']);
Route::get('/vesti', [NewsController::class, 'get_news']);
Route::get('/vesti/{id}', [NewsController::class, 'show_news'])->name('news.show');
Route::get('/vesti/kategorija/{categoryId}', [NewsController::class, 'showNewsByCategory'])->name('news.category');
Route::get('/sela', [PageController::class, 'vilages']);
Route::get('/znameniti-rumljani', [PageController::class, 'znameniti']);
Route::get('/tematske-setnje', [PageController::class, 'setnje']);
Route::get('/odmori-u-prirodi', [PageController::class, 'odmori']);
Route::get('/izletiste-borkovac', [PageController::class, 'izletiste']);
Route::get('/bara-traskovaca', [PageController::class, 'bara']);
Route::get('/sport-rekreacija', [PageController::class, 'sport']);
Route::get('/bazen-borkovac', [PageController::class, 'bazen']);
Route::get('/sportski-centri', [PageController::class, 'sportski_centri']);
Route::get('/fitnes-centri', [PageController::class, 'fitnes_centri']);
Route::get('/velnes', [PageController::class, 'velnes']);
Route::get('/ustanove-kulture', [PageController::class, 'ustanove']);
Route::get('/sakrana-bastina', [PageController::class, 'bastina']);
Route::get('/spomenici', [PageController::class, 'spomenici']);
Route::get('/gradsko-nasledje', [PageController::class, 'nasledje']);
Route::get('/hoteli', [PageController::class, 'hoteli']);
Route::get('/moteli', [PageController::class, 'moteli']);
Route::get('/prenocista', [PageController::class, 'prenocista']);
Route::get('/apartmani', [PageController::class, 'apartmani']);
Route::get('/zanatstvo-trgovina', [PageController::class, 'zanatstvo_trgovina']);
Route::get('/cehovska-povelja', [PageController::class, 'povelja']);
Route::get('/zanatski-proizvodi', [PageController::class, 'zanatski_proizvodi']);
Route::get('/gastronomski-proizvodi', [PageController::class, 'gastronomski_proizvodi']);
Route::get('/rukotvorine', [PageController::class, 'rukotvorine']);
Route::get('/rumski-vasar', [PageController::class, 'rumski_vasar']);
Route::get('/manifestacije', [PageController::class, 'manifestacije']);
Route::get('/manifestacije/{id}', [PageController::class, 'show_event'])->name('show_event');
Route::get('/kako-stici', [PageController::class, 'kako_stici']);
Route::get('/korisne-informacije', [PageController::class, 'korisne_informacije']);
Route::get('/turisticki-info-centar', [PageController::class, 'turisticki_info_centar']);
Route::get('/lov-i-ribolov', [PageController::class, 'lov_i_ribolov']);
Route::get('/terapijsko-jahanje', [PageController::class, 'terapijsko_jahanje']);
Route::get('/restorani', [PageController::class, 'restorani']);









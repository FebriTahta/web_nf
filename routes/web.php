<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\CabangController;
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

Route::get('/', function () {
    // return view('welcome');
    // $schedule = Http::get('https://api.banghasan.com/sholat/format/json/jadwal/kota/770/tanggal/'.date("Y-m-d"))->json()['jadwal']['data'];
    // return view('landing.index_landing',compact('schedule'));
    return view('landing.index_landing');
    // return redirect('/admin-dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/', function () {
//     $schedule = Http::get('https://api.banghasan.com/sholat/format/json/jadwal/kota/742/tanggal/'.date("Y-m-d"))->json()['jadwal']['data'];
//     return view('welcome', compact('schedule'));
// });

// ADMIN BE PAGE DASHBOARD
Route::get('/admin-dashboard',[AdminController::class, 'page_admin_dashboard'])->name('page.admin_dashboard');

// ADMIN BE POST
Route::get('/admin-post',[AdminController::class, 'page_admin_post'])->name('page.post.new');
Route::get('/admin-post-list',[AdminController::class, 'page_admin_list_post'])->name('page.post.list');

// KATEGORI
Route::get('/admin-kategori-page',[KategoriController::class, 'page_admin_kategori_page'])->name('page.master.kategori_page');
Route::post('/admin-kategori-post',[KategoriController::class, 'page_admin_kategori_post'])->name('page.master.kategori_post');
Route::get('/admin-kategori-list',[KategoriController::class, 'page_admin_kategori_list'])->name('page.master.kategori_list');
Route::post('/admin-kategori-delete',[KategoriController::class, 'page_admin_kategori_delete'])->name('page.master.kategori_delete');

// CABANG
Route::get('/admin-cabang-page',[CabangController::class, 'page_admin_cabang_page'])->name('page.master.cabang_page');
Route::get('/admin-cabang-list',[CabangController::class, 'page_admin_cabang_list'])->name('page.master.cabang_list');
Route::get('/admin-cabang-page-add',[CabangController::class, 'page_admin_cabang_page_add'])->name('page.master.cabang_page_add');


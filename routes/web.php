<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShowNewsController;
use App\Http\Controllers\ShowAgendaController;


Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
// Route Halaman Utama (Tanpa Filter)
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

// Route Filter Kategori (Menggunakan fungsi yang sama)
Route::get('/category/{slug}', [NewsController::class, 'index'])->name('news.category');

// Route Detail Berita
Route::get('/news/{slug}', [ShowNewsController::class, 'show'])->name('news.show');




Route::get('/pengumuman', function () {
    return view('agenda');
});
Route::get('/kontak', function () {
    return view('contact');
});
Route::get('/show-agenda', function () {

    return view('show_agenda');
});
Route::get('/lecturer', function () {
    return view('lecturer');
});
Route::get('/leader', function () {
    return view('leader');
});
Route::get('/galeri', function () {
    return view('gallery');
});
Route::get('/unduh', function () {
    return view('download');
});

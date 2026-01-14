<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/pengumuman', function () {
    return view('agenda');
});
Route::get('/kontak', function () {
    return view('contact');
});
Route::get('/show-agenda', function () {
    return view('show_agenda');
});
Route::get('/show-news', function () {
    return view('show_news');
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

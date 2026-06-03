<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShowNewsController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AnnouncmentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\DownloadController;

// ── Beranda ──────────────────────────────────────────────────────────────────
Route::get('/', [IndexController::class, 'index'])->name('home');

// ── Berita ───────────────────────────────────────────────────────────────────
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/category/{slug}', [NewsController::class, 'index'])->name('news.category');
Route::get('/news/{slug}', [ShowNewsController::class, 'show'])->name('news.show');

// ── Agenda & Pengumuman ───────────────────────────────────────────────────────
Route::get('/pengumuman', [AgendaController::class, 'index'])->name('agenda.index');
Route::get('/agenda/{slug}', [AgendaController::class, 'show'])->name('agenda.show');
Route::get('/pengumuman/{slug}', [AnnouncmentController::class, 'show'])->name('announcement.show');

// ── Halaman Statis ───────────────────────────────────────────────────────────
Route::get('/about',    [AboutController::class,    'index'])->name('about');
Route::get('/lecturer', [LecturerController::class, 'index'])->name('lecturer');
Route::get('/leader',   [LeaderController::class,   'index'])->name('leader');
Route::get('/galeri',   [GalleryController::class,  'index'])->name('gallery');
Route::get('/unduh',    [DownloadController::class, 'index'])->name('download');

// ── Kontak ───────────────────────────────────────────────────────────────────
Route::get('/kontak',  [ContactController::class, 'index'])->name('contact');
Route::post('/kontak', [ContactController::class, 'send'])->name('contact.send');
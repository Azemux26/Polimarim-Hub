<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AnnouncmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShowAgendaController;
use App\Http\Controllers\ShowNewsController;
use Illuminate\Support\Facades\Route;

// ── Beranda ──────────────────────────────────────────────────────────────────
Route::get('/', [IndexController::class, 'index'])->name('home');

// ── Berita ───────────────────────────────────────────────────────────────────
Route::get('/berita', [NewsController::class, 'index'])->name('news');
Route::get('/berita/kategori/{slug}', [NewsController::class, 'index'])->name('news.category');
Route::get('/berita/{news:slug}', [ShowNewsController::class, 'show'])->name('news.show');

// ── Agenda & Pengumuman ───────────────────────────────────────────────────────
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/agenda/{agenda:slug}', [ShowAgendaController::class, 'show'])->name('agenda.show');
Route::get('/pengumuman/{announcement:slug}', [AnnouncmentController::class, 'show'])->name('announcement.show');


// ── Halaman Statis ───────────────────────────────────────────────────────────
Route::get('/tentang', [AboutController::class, 'index'])->name('about');
Route::get('/unduhan', [DownloadController::class, 'index'])->name('download');
Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery');
Route::get('/pimpinan', [LeaderController::class, 'index'])->name('leader');
Route::get('/dosen', [LecturerController::class, 'index'])->name('lecturer');

// ── Kontak ───────────────────────────────────────────────────────────────────
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::post('/kontak', [ContactController::class, 'send'])->name('contact.send');
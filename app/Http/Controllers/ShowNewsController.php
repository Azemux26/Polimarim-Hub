<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class ShowNewsController extends Controller
{
    public function show($slug)
    {
        // Mencari berita yang slug-nya cocok DAN statusnya published
        $news = News::where('slug', $slug)
                    ->where('is_published', 'published')
                    ->firstOrFail(); // Munculkan 404 jika slug salah

        return view('show_news', compact('news'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;

class NewsController extends Controller
{
    public function index($slug = null) 
    {
        // 1. Ambil 5 Berita Terpopuler (Selalu muncul di semua kategori)
        $popularNews = News::with('category')
            ->where('is_published', '1')
            ->latest()
            ->take(5)
            ->get();

        // 2. Logika Berita Terbaru & Filtering Kategori
        $allCategories = Category::all();
        $category = null;

        $latestNewsQuery = News::with('category')->where('is_published', '1')->latest();

        if ($slug) {
            // Jika ada slug, filter berita berdasarkan kategori tersebut
            $category = Category::where('slug', $slug)->firstOrFail();
            $latestNewsQuery->where('category_id', $category->id);
        }

        $latestNews = $latestNewsQuery->paginate(10);

        // 3. Ambil Berita Kategori Khusus Audit Eksternal
        $auditNews = News::whereHas('category', function($query) {
                $query->where('name', 'Audit Eksternal');
            })
            ->where('is_published', '1')
            ->latest()
            ->take(4)
            ->get();

        return view('news', compact('popularNews', 'latestNews', 'auditNews', 'allCategories', 'category'));    
    }
}
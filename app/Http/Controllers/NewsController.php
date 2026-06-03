<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;

class NewsController extends Controller
{
    public function index(?string $slug = null)
    {
        // Gunakan scope published() yang sudah ada di model
        $popularNews = News::published()->with('category')->take(5)->get();

        $allCategories = Category::all();
        $category      = null;

        $latestNewsQuery = News::published()->with('category');

        if ($slug) {
            $category = Category::where('slug', $slug)->firstOrFail();
            $latestNewsQuery->where('category_id', $category->id);
        }

        $latestNews = $latestNewsQuery->paginate(10);

        $auditNews = News::published()
            ->whereHas('category', fn (object $q) => $q->where('name', 'Audit Eksternal'))
            ->take(4)
            ->get();

        return view('news', compact(
            'popularNews',
            'latestNews',
            'auditNews',
            'allCategories',
            'category',
        ));
    }
}
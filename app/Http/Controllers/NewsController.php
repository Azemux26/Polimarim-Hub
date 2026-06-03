<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index(?string $slug = null): View
    {
        /*
         * Model News belum memiliki kolom view_count/is_featured.
         * Karena itu, bagian "popularNews" masih memakai berita published terbaru.
         */
        $popularNews = News::published()
            ->with('category')
            ->take(5)
            ->get();

        $allCategories = Category::hasPublishedNews()
            ->orderBy('name')
            ->get();

        $category = null;

        $latestNewsQuery = News::published()
            ->with('category');

        if ($slug !== null) {
            $category = Category::where('slug', $slug)->firstOrFail();
            $latestNewsQuery->where('category_id', $category->id);
        }

        $latestNews = $latestNewsQuery
            ->paginate(10)
            ->withQueryString();

        $auditNews = News::published()
            ->with('category')
            ->whereHas('category', function ($query): void {
                $query->where('name', 'Audit Eksternal');
            })
            ->take(4)
            ->get();

        return view('news', compact(
            'popularNews',
            'latestNews',
            'auditNews',
            'allCategories',
            'category'
        ));
    }
}

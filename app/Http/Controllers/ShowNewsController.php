<?php

namespace App\Http\Controllers;

use App\Models\News;

class ShowNewsController extends Controller
{
    public function show(string $slug)
    {
        $news = News::published()->with('category')->where('slug', $slug)->firstOrFail();

        $relatedNews = News::published()
            ->with('category')
            ->where('category_id', $news->category_id)
            ->where('id', '!=', $news->id)
            ->take(4)
            ->get();

        return view('show_news', compact('news', 'relatedNews'));
    }
}
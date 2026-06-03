<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\View\View;

class ShowNewsController extends Controller
{
    public function show(News $news): View
    {
        abort_unless($news->is_published, 404);

        $news->load('category');

        $relatedNews = News::published()
            ->with('category')
            ->where('id', '!=', $news->id)
            ->when($news->category_id, function ($query) use ($news) {
                $query->where('category_id', $news->category_id);
            })
            ->take(4)
            ->get();

        return view('show_news', compact('news', 'relatedNews'));
    }
}

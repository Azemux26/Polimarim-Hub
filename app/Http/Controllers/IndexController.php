<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Announcment;
use App\Models\Category;
use App\Models\News;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        $latestNews = News::published()
            ->with('category')
            ->take(6)
            ->get();

        $agendas = Agenda::upcoming()
            ->take(3)
            ->get();

        $announcements = Announcment::active()
            ->take(3)
            ->get();

        $categories = Category::hasPublishedNews()
            ->withCount(['news' => function ($query): void {
                $query->where('is_published', true);
            }])
            ->orderBy('name')
            ->get();

        return view('index', compact(
            'latestNews',
            'agendas',
            'announcements',
            'categories'
        ));
    }
}

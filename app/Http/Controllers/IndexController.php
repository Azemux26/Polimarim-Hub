<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Agenda;
use App\Models\Announcment;
use App\Models\Category;

class IndexController extends Controller
{
    public function index()
    {
        $latestNews = News::published()->with('category')->take(6)->get();

        $agendas       = Agenda::upcoming()->take(3)->get();
        $announcements = Announcment::active()->take(3)->get();

        $categories = Category::hasPublishedNews()
            ->withCount(['news' => fn (object $q) => $q->where('is_published', true)])
            ->get();

        return view('index', compact(
            'latestNews',
            'agendas',
            'announcements',
            'categories',
        ));
    }
}
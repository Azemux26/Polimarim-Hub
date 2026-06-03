<?php

namespace App\Http\Controllers;

use App\Models\Announcment;
use Illuminate\View\View;

class AnnouncmentController extends Controller
{
    public function show(Announcment $announcement): View
    {
        $otherAnnouncements = Announcment::query()
            ->where('id', '!=', $announcement->id)
            ->active()
            ->take(3)
            ->get();

        return view('show_announcement', compact('announcement', 'otherAnnouncements'));
    }
}

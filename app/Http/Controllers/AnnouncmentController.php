<?php

namespace App\Http\Controllers;

use App\Models\Announcment;

class AnnouncmentController extends Controller
{
    /**
     * Halaman detail satu pengumuman: /pengumuman/{slug}
     */
    public function show(string $slug)
    {
        $announcement = Announcment::where('slug', $slug)->firstOrFail();

        // Pengumuman aktif lainnya (selain yang sedang dilihat)
        $otherAnnouncements = Announcment::active()
            ->where('id', '!=', $announcement->id)
            ->take(3)
            ->get();

        return view('show_announcement', compact('announcement', 'otherAnnouncements'));
    }
}
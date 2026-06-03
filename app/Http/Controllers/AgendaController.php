<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Announcment;

class AgendaController extends Controller
{
    /**
     * Halaman /pengumuman — tampilkan agenda & pengumuman sekaligus
     * karena di blade-nya pakai tab (pills-tab agenda | pengumuman).
     */
    public function index()
    {
        // Agenda yang akan datang, paginasi 9 per halaman
        $agendas = Agenda::upcoming()->paginate(9, ['*'], 'agenda_page');

        // Pengumuman aktif, paginasi 9 per halaman
        $announcements = Announcment::active()->paginate(9, ['*'], 'announcement_page');

        // Untuk widget sidebar / preview di homepage: ambil 3 terbaru
        $latestAgendas       = Agenda::upcoming()->take(3)->get();
        $latestAnnouncements = Announcment::active()->take(3)->get();

        return view('agenda', compact(
            'agendas',
            'announcements',
            'latestAgendas',
            'latestAnnouncements',
        ));
    }

    /**
     * Halaman detail satu agenda: /agenda/{slug}
     */
    public function show(string $slug)
    {
        $agenda = Agenda::where('slug', $slug)->firstOrFail();

        // Agenda lain yang akan datang (selain yang sedang dilihat)
        $otherAgendas = Agenda::upcoming()
            ->where('id', '!=', $agenda->id)
            ->take(3)
            ->get();

        return view('show_agenda', compact('agenda', 'otherAgendas'));
    }
}
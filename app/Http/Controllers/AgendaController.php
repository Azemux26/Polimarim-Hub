<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Announcment;
use Illuminate\View\View;

class AgendaController extends Controller
{
    /**
     * Menampilkan halaman daftar agenda dan pengumuman.
     * View agenda.blade.php memakai dua tab: Agenda dan Pengumuman.
     */
    public function index(): View
    {
        $agendas = Agenda::upcoming()
            ->paginate(9, ['*'], 'agenda_page');

        $announcements = Announcment::active()
            ->paginate(9, ['*'], 'announcement_page');

        return view('agenda', compact('agendas', 'announcements'));
    }
}

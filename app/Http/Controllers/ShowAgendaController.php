<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\View\View;

class ShowAgendaController extends Controller
{
    public function show(Agenda $agenda): View
    {
        $otherAgendas = Agenda::query()
            ->where('id', '!=', $agenda->id)
            ->upcoming()
            ->take(3)
            ->get();

        return view('show_agenda', compact('agenda', 'otherAgendas'));
    }
}

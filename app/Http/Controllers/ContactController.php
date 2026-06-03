<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact');
    }

    public function send(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nama'   => ['required', 'string', 'max:100'],
            'email'  => ['required', 'email', 'max:150'],
            'subjek' => ['required', 'string', 'max:200'],
            'pesan'  => ['required', 'string', 'max:2000'],
        ]);

        /*
         * Data sudah tervalidasi.
         * Nanti sebelum masuk production, bagian ini bisa disambungkan
         * ke Mail, Notification, atau tabel contact_messages.
         */
        return redirect()
            ->route('contact')
            ->with('success', 'Pesan Anda berhasil dikirim. Kami akan merespons dalam 2 hari kerja.');
    }
}

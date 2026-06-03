<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    /**
     * Handle form kirim pesan dari halaman kontak.
     * Saat ini hanya redirect balik dengan pesan sukses.
     * Nanti bisa disambungkan ke Mail atau Notification.
     */
    public function send(Request $request)
    {
        $request->validate([
            'nama'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email'],
            'subjek'  => ['required', 'string', 'max:200'],
            'pesan'   => ['required', 'string'],
        ]);

        // TODO: kirim email ke admin menggunakan Mail::to(...)
        // Mail::to(config('mail.admin_address'))->send(new ContactMail($request->all()));

        return redirect()->route('contact')
            ->with('success', 'Pesan Anda berhasil dikirim. Kami akan merespons dalam 2 hari kerja.');
    }
}
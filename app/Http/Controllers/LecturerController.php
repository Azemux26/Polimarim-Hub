<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LecturerController extends Controller
{
    public function index(): View
    {
        return view('lecturer');
    }
}

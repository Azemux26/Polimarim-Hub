<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DownloadController extends Controller
{
    public function index(): View
    {
        return view('download');
    }
}

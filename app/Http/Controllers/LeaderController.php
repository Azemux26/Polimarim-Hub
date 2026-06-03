<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LeaderController extends Controller
{
    public function index(): View
    {
        return view('leader');
    }
}

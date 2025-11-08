<?php

namespace App\Http\Controllers;

use App\Models\Programmer;

class AboutController extends Controller
{
    public function index()
    {
        $programmer1 = Programmer::master();
        $programmer2 = Programmer::branch();

        return view('about', compact('programmer1', 'programmer2'));
    }
}

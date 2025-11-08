<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Data programmer 1
        $programmer1 = [
            'nama' => 'Muhamad Sari Rizki',
            'nim'  => '2301010008',
            'deskripsi' => 'Programmer 1, Master Programmer alias bossnya',
            'foto' => 'images/rizki.JPG',
        ];

        // Data programmer 2
        $programmer2 = [
            'nama' => 'Made Arya Sutha Wijaya',
            'nim'  => '2301010030',
            'deskripsi' => 'Programmer 2, ternaknya Programmer 1.',
            'foto' => 'images/sutha.jpeg',
        ];

        return view('about', compact('programmer1', 'programmer2'));
    }
}

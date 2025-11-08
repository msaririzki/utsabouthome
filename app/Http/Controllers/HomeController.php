<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use App\Models\Programmer;

class HomeController extends Controller
{
    public function index()
    {
        $programmer1 = Programmer::master();
        $franchises  = Franchise::all();
        $total       = count($franchises);

        return view('home', [
            'programmer1'    => $programmer1,
            'franchises'     => $franchises,
            'totalFranchise' => $total,
        ]);
    }
}

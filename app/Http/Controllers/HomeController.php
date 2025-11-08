<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // nama and nim
        $programmer1 = [
            'nama' => 'Muhamad Sari Rizki',
            'nim'  => '2301010008',
        ];

        // keterangan konten
        $franchises = [
            [
                'judul' => 'Special Sambal',
                'subjudul' => 'Restoran Khas Sambal',
                'deskripsi' => 'Waroeng Spesial Sambal SS berdiri pada tanggal 20 Agustus 2002 dan kini memiliki 100 cabang yang tersebar dari Jawa - Bali hingga Asia.',
                'warna' => '#12B2D8',
            ],
            [
                'judul' => 'Sate Pak Pong',
                'subjudul' => 'Cari Satay di Jogja',
                'deskripsi' => 'Menu masakan yang berbahan dasar daging kambing dari berbagai macam olahan, khas Kabupaten Bantul.',
                'warna' => '#F4E3A5',
            ],
            [
                'judul' => 'Gudeg Sagan',
                'subjudul' => 'Authentic Jogja Food',
                'deskripsi' => 'Gudeg adalah makanan khas Yogyakarta dan Jawa Tengah yang terbuat dari nangka muda (gori) yang dimasak lama dengan santan, gula merah, dan rempah.',
                'warna' => '#F5C8C8',
            ],
            [
                'judul' => 'Sushi Cerita',
                'subjudul' => 'Sushi Untuk Mahasiswa',
                'deskripsi' => 'Restoran di Sleman dan Mlati, Yogyakarta yang menawarkan masakan Jepang modern dengan menu beragam.',
                'warna' => '#DADDE1',
            ],
        ];

        $totalFranchise = count($franchises);

        return view('home', [
            'programmer1'    => $programmer1,
            'franchises'     => $franchises,
            'totalFranchise' => $totalFranchise,
        ]);
    }
}

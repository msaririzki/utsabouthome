<?php

namespace App\Models;

class Programmer
{
    public static function master(): array
    {
        return [
            'nama' => 'Muhamad Sari Rizki',
            'nim'  => '2301010008',
            'deskripsi' => 'Programmer 1, ayok pak badminton lagi',
            'foto' => 'images/rizki.JPG',
        ];
    }

    public static function branch(): array
    {
        return [
            'nama' => 'Made Arya Sutha Wijaya',
            'nim'  => '2301010030',
            'deskripsi' => 'Programmer 2 Cita-cita ternak lele.',
            'foto' => 'images/sutha.jpeg',
        ];
    }
}

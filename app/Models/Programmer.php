<?php

namespace App\Models;

class Programmer
{
    public static function master(): array
    {
        return [
            'nama' => 'Muhamad Sari Rizki',
            'nim'  => '2301010008',
            'deskripsi' => 'Programmer 1, Master Programmer alias bossnya',
            'foto' => 'images/rizki.JPG',
        ];
    }

    public static function branch(): array
    {
        return [
            'nama' => 'Made Arya Sutha Wijaya',
            'nim'  => '2301010030',
            'deskripsi' => 'Programmer 2 ternaknya Programmer 1.',
            'foto' => 'images/sutha.jpeg',
        ];
    }
}

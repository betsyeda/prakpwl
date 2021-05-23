<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    public function allData()
    {
        return [
            [
                'nip' => '1234',
                'nama' => 'bambang',
                'matkul' => 'fisika'
            ],

            [
                'nip' => '1235',
                'nama' => 'budi',
                'matkul' => 'kimia' 
            ],

            [
                'nip' => '1236',
                'nama' => 'siti',
                'matkul' => 'biologi'
            ]
         ];

    }
}

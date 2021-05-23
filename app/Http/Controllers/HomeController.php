<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        $data = [
            'kelas'=>'Kom C',
            'prodi'=>'Teknologi Informasi'
        ];
        return view('home', $data);
    }

    public function about()
    {
        return "Ini halaman about";
      }
        public function mhs()
        {
            return "Ini halaman mahasiswa";
        }
    }

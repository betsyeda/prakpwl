<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\DosenModel;

class MahasiswaController extends Controller
{
/*    public function __construct()
    {
        $this->DosenModel = new DosenModel();
    }
*/
    public function index()
    {
/*        $data = [
            'mahasiswa' => $this->MahasiswaModel->allData(),
        ];
        */

        $nip1 ="1234";
        $nama1 = "bambang";
        $matkul1 = "fisika";

        $nip2 ="1235";
        $nama2 = "budi";
        $matkul2 = "kimia";

        $nip3 ="1236";
        $nama3 = "siti";
        $matkul3 = "biologi";

        return view('mahasiswa', ['nip1'=>$nip1 , 'nama1'=>$nama1 , 'matkul1'=>$matkul1 , 
                                  'nip2'=>$nip2 , 'nama2'=>$nama2 , 'matkul2'=>$matkul2 , 
                                  'nip3'=>$nip3 , 'nama3'=>$nama3 , 'matkul3'=>$matkul3 ]);
    }
    
}

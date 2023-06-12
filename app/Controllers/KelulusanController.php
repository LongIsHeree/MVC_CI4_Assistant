<?php

namespace App\Controllers;

class KelulusanController extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function input()
    {
        $data = [
            'title'=> 'Kirim Pesan',
        ];
        return view('/Tugas/inputKelulusan',$data);
    }
    public function prosesLulus($p = 'kosong'){
        $data['nim'] = $_GET['nim'];
        $data['nama'] = $_GET['nama'];
        $data['status'] = $_GET['status'];
        return view('/Tugas/tampilkelulusan',$data);
    }
}
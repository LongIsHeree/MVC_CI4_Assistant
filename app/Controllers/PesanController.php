<?php

namespace App\Controllers;

class PesanController extends BaseController
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
        return view('/Tugas/input',$data);
    }
    public function proses($p = 'kosong'){
        $data ['pesan'] = $_GET['pesan'];
        return view('/Tugas/tampil',$data);
    }
}
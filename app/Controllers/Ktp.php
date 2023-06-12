<?php

namespace App\Controllers;

class Ktp extends BaseController
{
    public function index()
    {
        $data = [
            'title'=> 'Profil KTP',
        ];
        return view('/Tugas/profil',$data);
    }
    public function ktm(){
        $data = [
            'title'=> 'Profil KTM',
        ];
        return view('/Tugas/profilKTM',$data);
    }
}
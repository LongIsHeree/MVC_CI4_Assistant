<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('Login/Login');
    }
    public function home(){
        $session = session();
        if($session->has('pengguna')){
            $item = $session->get('pengguna');
            if($item == 'admin'){
                return view('Login/home');
            }else{
                return view ('Login/Login');
            }
        }
        else{
            return view('Login/Login');
        }
    }
    public function check(){
        $post = $this->request->getPost(['usr','pwd']);
        if($post['usr']=='admin'&&$post['pwd']=='123'){
            $session = session();
            $session->set('pengguna', $post['usr']);
            return view('Login/home');
        }else{
            return view('Login/fail');
        }
    }
    public function logout(){
        $session = session();
        $session->remove('pengguna');
        return view('Login/Login');
    }
}
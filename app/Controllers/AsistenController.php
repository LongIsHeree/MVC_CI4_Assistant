<?php
namespace App\Controllers;
use App\Models\AsistenModel;
use App\Models\LoginModel;
class AsistenController extends BaseController
{
    protected $asistenModel;
    protected $loginModel;
    public function __construct(){
        $this->asistenModel = new AsistenModel();
        $this->loginModel = new LoginModel();
    }
    public function home(){ 
        $asistenModel = new AsistenModel();
        $asisten = $asistenModel->findAll();
        $data = [
            'title'=> 'Daftar Asisten Praktikum',
            'asisten' => $asisten
        ];
        $session = session();
        if($session->has('pengguna')){
            $item = $session->get('pengguna');
            if($item == 'admin'){
                
                return view('asisten/homeAsisten',$data);
            }else{
                return view ('asisten/loginAsisten');
            }
        }
        else{
            return view('asisten/loginAsisten');
        }
    }
    public function logout(){
        $session = session();
        $session->remove('pengguna');
        return view('asisten/loginAsisten');
    }
    public function check(){
        $asistenModel = new AsistenModel();
        $asisten = $asistenModel->findAll();
        $getPost = $this->request->getPost(['username','password']);
        $loginModel = new LoginModel();
        $validasi = $this->loginModel->login($getPost);
        $data = [
            'title'=> 'Daftar Asisten Praktikum',
            'asisten' => $asisten
        ];
        $post = $this->request->getPost(['usr','pwd']);
        if($validasi>0){
            $session = session();
            $session->set('usr', $post['usr']);
            return view('asisten/homeAsisten',$data);
        }else{
            return view('Login/fail');
        }
    }
    public function login(){
        return view('/asisten/loginAsisten');
    }
    public function index()
    {
        $asistenModel = new AsistenModel();
        $asisten = $asistenModel->findAll();
        $data = [
            'title'=> 'Daftar Asisten Praktikum',
            'asisten' => $asisten
        ];
      
        return view('/asisten/simpanAsisten',$data);
    }
    public function simpan(){
        helper('form');
        if(!$this -> request ->is('post')){
            return view('/asisten/simpanAsisten');
        }

        // $post = $this->request->getPost(['nim','nama',"praktikum","ipk"]);
        // $model = model(AsistenModel::class);
        // $model->simpan($post);
        // return view('/asisten/AsistenView');
        $this->asistenModel->save([
            'nim'=>$this->request->getVar('nim'),
            'nama'=>$this->request->getVar('nama'),
            'praktikum'=>$this->request->getVar('praktikum'),
            'ipk'=>$this->request->getVar('ipk')
        ]);
        session()->setFlashdata('pesan','Data berhasil disimpan!');
        return redirect()->to('/AsistenController/index');
    }
    public function update(){
        helper('form');
        if(!$this -> request ->is('post')){
            return view('/asisten/updateAsisten');
        }
        $this->asistenModel->save([
            'nim'=>$this->request->getVar('nim'),
            'nama'=>$this->request->getVar('nama'),
            'praktikum'=>$this->request->getVar('praktikum'),
            'ipk'=>$this->request->getVar('ipk')
        ]);
        session()->setFlashdata('pesan','Data berhasil diupdate!');
        return redirect()->to('/AsistenController/update');
    }
    public function delete(){
        helper('form');
        if(!$this -> request ->is('post')){
            return view('/asisten/deleteAsisten');
        }
        $this->asistenModel->delete([
            'nim'=>$this->request->getVar('nim'),
            'nama'=>$this->request->getVar('nama'),
            'praktikum'=>$this->request->getVar('praktikum'),
            'ipk'=>$this->request->getVar('ipk')
        ]);
        session()->setFlashdata('pesan','Data berhasil dihapus!');
        return redirect()->to('/AsistenController/delete');
    }
    public function search(){
        $asistenModel = new AsistenModel();
        $asisten = $asistenModel->findAll();
        if(!$this -> request ->is('post')){
            return view('/asisten/homeAsisten');
        }
            $nim = $this->request->getPost(['key']);

            $model = model(AsistenModel::class);
            $asistenM = $model->ambil($nim['key']);

            $data = ['hasil' => $asistenM,
                    'asisten' => $asisten];
            return view('asisten/homeAsisten',$data);
        
    }
}
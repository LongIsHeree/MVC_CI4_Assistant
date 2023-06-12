<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'login';
    protected $primaryKey ='username';
    protected $allowedFields =['username','password'];
    protected $useAutoIncrement = false;
    
    public function login($login){
        return $this->where(['username' => $login['username'], 'password' => $login['password']])->first();
    }
    
}
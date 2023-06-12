<?php

namespace App\Models;

use CodeIgniter\Model;

class AsistenModel extends Model
{
    protected $table = 'asisten';
    protected $primaryKey ='nim';
    protected $allowedFields =['nim','nama','praktikum','ipk'];
    protected $useAutoIncrement = false;
    
    public function ambil($nim){
        return $this->where(['nim'=> $nim])->first();
    }
    
}
<?php

namespace App\Controllers;

use App\Models\TodoModel;
class Todo extends BaseController
{
    protected $todoModel;
    public function __construct(){
        $this->todoModel = new TodoModel();
    }
    public function index()
    {
        $todoModel = new TodoModel();
        $todo = $todoModel->findAll();
        $data = [
            'title'=> 'Aplikasi Todo-List',
            'todo' => $todo
        ];
      
        return view('/todo/todolist',$data);
    }
    public function save(){
        $todoModel = new TodoModel();
        $this->todoModel->save([
            'kegiatan' => $this->request->getVar('kegiatan')
        ]);
       return redirect()->to('/Todo');
    }
}
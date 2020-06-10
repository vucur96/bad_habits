<?php namespace App\Controllers;

class Gost extends BaseController
{
    protected function prikaz($page,$data) {
        $data['controller']='Gost';
        echo view('sabloni/header');
        echo view("stranice/$page",$data);
        echo view('sabloni/footer');
    }
    
    public function index(){
        $this->prikaz('index',[]);
    }


    public function login(){
        $this->prikaz('login',[]);
    }
        
	//--------------------------------------------------------------------

}



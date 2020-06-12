<?php namespace App\Controllers;

class Trener extends BaseController{
    
    protected function poziv($page,$data) {
        $data['controller']='Trener';
        echo view('sabloni/header_tren');
        echo view("stranice/$page",$data);
        echo view('sabloni/footer');
    }
     
      public function index()
    {
            $this->poziv('index',[]);
    }
     
    public function pisanjebloga_tr()
    {
            $this->poziv('pisanjebloga_tr',[]);
    }
    
}





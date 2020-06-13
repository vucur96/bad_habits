<?php namespace App\Controllers;

class Sponzor extends BaseController{
    
    protected function poziv($page,$data) {
        $data['controller']='Sponzor';
        echo view('sabloni/header_spon');
        echo view("stranice/$page",$data);
        echo view('sabloni/footer');
    }
   
     
    public function index(){
            $this->poziv('index',[]);
    }
    
     public function logout() {
        $this->session->destroy();
        return redirect()->to(site_url('/'));
    }
    
}



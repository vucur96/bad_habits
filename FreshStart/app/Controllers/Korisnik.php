<?php namespace App\Controllers;


class Korisnik extends BaseController{
    
    protected function poziv($page,$data) {
        $data['controller']='Korisnik';
        echo view('sabloni/header_kor');
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
        

	//--------------------------------------------------------------------

}


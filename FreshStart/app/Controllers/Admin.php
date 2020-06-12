<?php namespace App\Controllers;

class Admin extends BaseController
{
    protected function poziv($page,$data) {
        $data['controller']='Admin';
        echo view('sabloni/header_adm');
        echo view("stranice/$page",$data);
        echo view('sabloni/footer');
    }
         
    public function index(){
            $this->poziv('admin_meni',[]);
    }
    
    public function promenastatusa(){
            $this->poziv('promenastatusa',[]);
    }    
    
    public function brisanjekorisnika(){
            $this->poziv('brisanjekorisnika',[]);
    }
    
    public function zahtevikorisnika(){
            $this->poziv('zahtevikorisnika',[]);
    }
    
    public function zahtevizablog(){
            $this->poziv('zahtevizablog',[]);
    }
    
    public function adminblog()
    {
            $this->poziv('pisanjebloga_tr',[]);
    }
         
    public function ispisi_korisnike(){}
    public function promeni_status(){}
    public function ispisi_blogove(){}    
        
        
        
        

	//--------------------------------------------------------------------

}
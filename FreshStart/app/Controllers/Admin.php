<?php namespace App\Controllers;
use App\Models\ZahtevKorisnikModel;
use App\Models\ZahtevBlogModel;
use App\Models\KorisnikModel;
use App\Models\BlogModel;

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
    
    public function logout() {
        $this->session->destroy();
        return redirect()->to(site_url('/'));
    }
    
      public function admin_meni(){
            $this->poziv('admin_meni',[]);
    }
    
    public function promenastatusa(){
            $this->poziv('promenastatusa',[]);
    }    
    
    public function brisanjekorisnika(){
            $this->poziv('brisanjekorisnika',[]);
    }
    
    public function zahtevikorisnika(){
            $zahtevKorModel = new ZahtevKorisnikModel();
            $zahtevKorisnici = $zahtevKorModel->findAll();
            $this->poziv('zahtevikorisnika',['zahtevikorisnika' => $zahtevKorisnici]);
    }
    
    public function zahtevizablog(){
            $this->poziv('zahtevizablog',[]);
    }
    
    public function adminblog()
    {
            $this->poziv('adminblog',[]);
    }
         
    public function ispisi_korisnike(){}
    public function promeni_status(){}
    public function ispisi_blogove(){}    
        
        
        
        

	//--------------------------------------------------------------------

}
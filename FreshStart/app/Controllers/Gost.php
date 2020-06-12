<?php namespace App\Controllers;

use App\Models\KorisnikModel;
use App\Models\ZahtevKorisnikModel;

class Gost extends BaseController{
    
    protected function poziv($page,$data) {
        $data['controller']='Gost';
        echo view('sabloni/header');
        echo view("stranice/$page",$data);
        echo view('sabloni/footer');
    }
    
    public function index(){
            $this->poziv('index',[]);
    }
    
    public function login($poruka=null)
    {
        echo view('sabloni/header_login');
        echo view('stranice/login',['poruka'=>$poruka]);
        echo view('sabloni/footer');
    }
    
    public function proveriPrijavu() {
        if(!$this->validate(['korIme'=>'required','lozinka'=>'required'])){
            return $this->poziv('login', ['errors'=>$this->validator->getErrors()]);
        }
        $korisnikModel=new KorisnikModel();
        $korisnik=$korisnikModel->find($this->request->getVar('korIme'));
        if($korisnik==null){
            return $this->login('Korisnik ne postoji!');
        }
        if($korisnik->lozinka!=$this->request->getVar('lozinka')){
            return $this->login('Pogresna lozinka!');
        }
        
        $this->session->set('korisnik',$korisnik);
        return redirect()->to(site_url('Korisnik'));
        
    }
    
    public function promenaLozinke()
    {
            $this->poziv('promenalozinke',[]);
    }
    
    public function proveriPromenuLozinke() {
        
    }
    
    public function registracija()
    {
            $this->poziv('registracija',[]);
    }
    
    public function proveriRegistraciju() {
        
    }

    public function registracijaKorisnik()
    {
            $this->poziv('korisnik',[]);
    }
    
    public function proveriRegKorisnik() {
        
    }
    
    public function registracijaSponzor()
    {
            $this->poziv('sponzor',[]);
    }
    
    public function proveriRegSponzor() {
        
    }
    
    public function registracijaTrener()
    {
            $this->poziv('trener',[]);
    }
    public function proveriRegTrener() {
        
    }
	//--------------------------------------------------------------------

}

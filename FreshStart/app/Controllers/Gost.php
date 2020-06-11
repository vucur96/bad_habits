<?php namespace App\Controllers;

class Gost extends BaseController{
    
    protected function poziv($page,$data) {
        echo view('sabloni/header');
        echo view("stranice/$page",$data);
        echo view('sabloni/footer');
    }
    
    public function index()
    {
            $this->poziv('index',[]);
    }
    
    public function login()
    {
        echo view('sabloni/header_login');
        echo view('stranice/login');
        echo view('sabloni/footer');
    }
    
    public function proveriPrijavu($param) {
        
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
            $this->poziv('korisnik',[]);
    }
    
    public function proveriRegSponzor() {
        
    }
    
    public function registracijaTrener()
    {
            $this->poziv('korisnik',[]);
    }
    public function proveriRegTrener() {
        
    }
	//--------------------------------------------------------------------

}

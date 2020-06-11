<?php namespace App\Controllers;

class Gost extends BaseController{
    
    protected function poziv($page,$data) {
        $data['controller']='Gost';
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
    
    public function proveriPrijavu() {
        
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
    
    public function aerobic()
    {
            $this->poziv('aerobic',[]);
    }
    
    public function body_pump()
    {
            $this->poziv('body_pump',[]);
    }
    
    public function cardio()
    {
            $this->poziv('cardio',[]);
    }
    
    public function classesSingle()
    {
            $this->poziv('classes-single',[]);
    }
    
    public function classes()
    {
            $this->poziv('classes',[]);
    }
    
    public function contact()
    {
            $this->poziv('contact',[]);
    }
    
    public function funkcionalni()
    {
            $this->poziv('funkcionalni',[]);
    }
    
    public function grupni_treninzi()
    {
            $this->poziv('grupni_treninzi',[]);
    }
    
    public function individualni_treninzi()
    {
            $this->poziv('individualni_treninzi',[]);
    }
    
    public function karate()
    {
            $this->poziv('karate',[]);
    }
    
    public function snaga()
    {
            $this->poziv('snaga',[]);
    }
    
    public function schedule()
    {
            $this->poziv('schedule',[]);
    }
    
    public function yoga()
    {
            $this->poziv('yoga',[]);
    }
    
    public function o_trenerima()
    {
            $this->poziv('o_trenerima',[]);
    }
    
    public function blog()
    {
            $this->poziv('blog',[]);
    }
	//--------------------------------------------------------------------

}

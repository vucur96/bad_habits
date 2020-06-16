<?php namespace App\Controllers;

use App\Models\KorisnikModel;
use App\Models\ZahtevKorisnikModel;
use App\Models\AdminModel;

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
            $adminModel=new AdminModel();
            $korisnik=$adminModel->find($this->request->getVar('korIme'));
        }
        if($korisnik==null){
            return $this->login('Korisnik ne postoji!');
        }
        
        if($korisnik->lozinka!=$this->request->getVar('lozinka')){
            return $this->login('Pogresna lozinka!');
        }
        
        $this->session->set('KorisnickoIme',$korisnik);
        
        if($korisnik->KorisnickoIme=='nikoleta'){
             return redirect()->to(base_url('/Admin') );
        }
        
       if($korisnik->tip==1){
           return redirect()->to(base_url('/Sponzor') );
       }else{
           if($korisnik->tip==2){
                return redirect()->to(base_url('/Trener') );  
           }else{
                return redirect()->to(base_url('/Korisnik') );
           }
       }
        
    }
    
    public function promenaLozinke($poruka=null)
    {
            $this->poziv('promenalozinke',['poruka'=>$poruka]);
    }
    
    public function proveriPromenuLozinke() {
        if(!$this->validate(['korIme'=>'required','staraLoz'=>'required','novaLoz'=>'required','potvrda'=>'required'])){
            return $this->poziv('promenalozinke', ['errors'=>$this->validator->getErrors()]);
        }
        $korisnikModel=new KorisnikModel();
        $korisnik=$korisnikModel->find($this->request->getVar('korIme'));
        if($korisnik==null){
            $adminModel=new AdminModel();
            $admin=$adminModel->find($this->request->getVar('korIme'));
            if($admin==null){
                return $this->promenaLozinke('Korisnik ne postoji!');
            }
            if($admin->lozinka!=$this->request->getVar('staraLoz')){
                return $this->promenaLozinke('Pogresno uneta stara lozinka!');
            }
            if($this->request->getVar('novaLoz')!=$this->request->getVar('potvrda')){
                return $this->promenaLozinke('Nova lozinka i ponovljena lozinka nisu iste!');
            }

           $adminModel->update($this->request->getVar('korIme'), ['lozinka'=>$this->request->getVar('novaLoz')]);
        }else{
            if($korisnik->lozinka!=$this->request->getVar('staraLoz')){
                return $this->promenaLozinke('Pogresno uneta stara lozinka!');
            }
            if($this->request->getVar('novaLoz')!=$this->request->getVar('potvrda')){
                return $this->promenaLozinke('Nova lozinka i ponovljena lozinka nisu iste!');
            }

           $korisnikModel->update($this->request->getVar('korIme'), ['lozinka'=>$this->request->getVar('novaLoz')]);
        }
       return redirect()->to(base_url('/Gost') );  
    }
    
    public function registracija($poruka=null)
    {
            $this->poziv('registracija',['poruka'=>$poruka]);
    }
    
    public function proveriRegistraciju() {
        if(!$this->validate(['korisnickoIme'=>'required','Email'=>'required','lozinka'=>'required','PonovoLoz'=>'required','tip'=>'required'])){
            return $this->poziv('registracija', ['errors'=>$this->validator->getErrors()]);
        }
        
        $zahtevKorModel=new ZahtevKorisnikModel();
        $korisnik=$zahtevKorModel->find($this->request->getVar('korisnickoIme'));
        if($korisnik!=null){
            return $this->registracija('Korisnik sa unetim korisnickim imenom vec postoji!');
        }
        
        $KorModel=new KorisnikModel();
        $korisnik=$KorModel->find($this->request->getVar('korisnickoIme'));
        if($korisnik!=null){
            return $this->registracija('Korisnik sa unetim korisnickim imenom vec postoji!');
        }
        
        $adminModel=new AdminModel();
        $korisnik=$adminModel->find($this->request->getVar('korisnickoIme'));
        if($korisnik!=null){
            return $this->registracija('Korisnik sa unetim korisnickim imenom vec postoji!');
        }
        
        if($this->request->getVar('lozinka')!=$this->request->getVar('PonovoLoz')){
            return $this->registracija('Lozinka i ponovljena lozinka nisu iste!');
        }
        
        $zahtevKorModel->insert(['KorisnickoIme'=>$this->request->getVar('korisnickoIme'),'email'=>$this->request->getVar('Email'),'lozinka'=>$this->request->getVar('lozinka'),'tip'=>$this->request->getVar('tip')]);
        
        $this->session->set('KorisnickoIme',$this->request->getVar('korisnickoIme'));
        
        if($this->request->getVar('tip')==1){
           return redirect()->to(base_url('/Gost/registracijaSponzor') );
       }else{
           if($this->request->getVar('tip')==2){
                return redirect()->to(base_url('/Gost/registracijaTrener') );  
           }else{
                return redirect()->to(base_url('/Gost/registracijaKorisnik') );
           }
       }

    }

    public function registracijaKorisnik($poruka=null)
    {       
            $this->poziv('korisnik',['poruka'=>$poruka]);
    }
    
    public function proveriRegKorisnik() {
        if(!$this->validate(['ime'=>'required','prezime'=>'required','datumrodj'=>'required','visina'=>'required','tezina'=>'required','cilj'=>'required'])){
            return $this->poziv('korisnik', ['errors'=>$this->validator->getErrors()]);
        }
        
        $zahtevKorModel=new ZahtevKorisnikModel();
        
        $korisnik=$this->session->get('KorisnickoIme');
        $zahtevKorModel->update($korisnik,['ime'=>$this->request->getVar('ime'),'prezime'=>$this->request->getVar('prezime'),'datumrodj'=>$this->request->getVar('datumrodj'),'visina'=>$this->request->getVar('visina'),'tezina'=>$this->request->getVar('tezina'),'cilj'=>$this->request->getVar('cilj')]);
        
        $this->session->destroy();
        
        return redirect()->to(base_url('/Gost'));
    }
    
    public function registracijaSponzor($poruka=null)
    {
            $this->poziv('sponzor',['poruka'=>$poruka]);
    }
    
    public function proveriRegSponzor() {
        if(!$this->validate(['imefirme'=>'required','opisdel'=>'required','vrstarek'=>'required'])){
            return $this->poziv('sponzor', ['errors'=>$this->validator->getErrors()]);
        }
        
        $zahtevKorModel=new ZahtevKorisnikModel();
        
        $korisnik=$this->session->get('KorisnickoIme');
        $zahtevKorModel->update($korisnik,['imefirme'=>$this->request->getVar('imefirme'),'opisdel'=>$this->request->getVar('opisdel'),'vrstarek'=>$this->request->getVar('vrstarek')]);
        
        $this->session->destroy();
        
        return redirect()->to(base_url('/Gost'));
       
    }
    
    public function registracijaTrener($poruka=null)
    {
            $this->poziv('trener',['poruka'=>$poruka]);
    }
    public function proveriRegTrener() {
        if(!$this->validate(['ime'=>'required','prezime'=>'required','datumrodj'=>'required','kurs'=>'required'])){
            return $this->poziv('trener', ['errors'=>$this->validator->getErrors()]);
        }
        
        $zahtevKorModel=new ZahtevKorisnikModel();
        
        $korisnik=$this->session->get('KorisnickoIme');
        $zahtevKorModel->update($korisnik,['ime'=>$this->request->getVar('ime'),'prezime'=>$this->request->getVar('prezime'),'datumrodj'=>$this->request->getVar('datumrodj'),'kurs'=>$this->request->getVar('kurs')]);
        
        $this->session->destroy();
        
        return redirect()->to(base_url('/Gost'));
    }
	//--------------------------------------------------------------------

}

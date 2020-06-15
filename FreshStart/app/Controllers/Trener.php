<?php namespace App\Controllers;
    
use App\Models\KorisnikModel;
use App\Models\ZahtevBlogModel;
use App\Models\TerminModel;

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
    
    public function logout() {
        $this->session->destroy();
        return redirect()->to(site_url('/'));
    }
     
    public function pisanjebloga_tr()
    {
            $this->poziv('pisanjebloga_tr',[]);
    }
    public function proveriBlog(){
        if(!$this->validate(['naslov'=>'required','tekstbloga'=>'required'])){
            return $this->poziv('pisanjebloga_tr',['errors'=>$this->validator->getErrors()]);
        }
        $noviblog= new ZahtevBlogModel();
       
        
        $noviblog->insert(['BlogId'=>$noviblog->getInsertID(), 'naslov'=>$this->request->getVar('naslov'),'tekst'=>$this->request->getVar('tekstbloga'), 'KorisnickoIme'=>$this->session->get('KorisnickoIme')->KorisnickoIme]);
    
        return redirect()->to(base_url('/Trener'));
    }
    
    public function zakazivanjetermina()
    {
        $this->poziv('zakazivanjetermina',[]);
    }
    public function proveriTermin(){
        if(!$this->validate(['dan'=>'required','pocetak'=>'required','kraj'=>'required'])){
            return $this->poziv('zakazivanjetermina',['errors'=>$this->validator->getErrors()]);
        }
        $termin=new TerminModel();
        
        $termin->insert(['TerID'=>$termin->getInsertID(), 'dan'=>$this->request->getVar('dan'), 'pocetak'=>$this->request->getVar('pocetak'),'kraj'=>$this->request->getVar('kraj'), 'KorisnickoIme'=>$this->session->get('KorisnickoIme')->KorisnickoIme]);
        
         return redirect()->to(base_url('/Trener'));
    }

}





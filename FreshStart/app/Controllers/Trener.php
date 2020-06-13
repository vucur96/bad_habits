<?php namespace App\Controllers;
    
use App\Models\KorisnikModel;
use App\Models\ZahtevBlogModel;

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
    public function proveriBlog(){
        if(!$this->validate(['naslov'=>'required','tekstbloga'=>'required'])){
            return $this->poziv('pisanjebloga_tr',['errors'=>$this->validator->getErrors()]);
        }
        $noviblog= new ZahtevBlogModel();
       
        
        $noviblog->insert(['BlogId'=>$noviblog->getInsertID(), 'naslov'=>$this->request->getVar('naslov'),'tekst'=>$this->request->getVar('tekstbloga'), 'KorisnickoIme'=>$this->session->get('KorisnickoIme')->KorisnickoIme]);
    
        return redirect()->to(base_url('/Trener'));
    }
    
}





<?php namespace App\Controllers;

use App\Models\ZahtevKorisnikModel;
    
class Korisnik extends BaseController{
    
    protected function poziv($page,$data) {
        $data['controller']='Korisnik';
        echo view('sabloni/header_kor');
        echo view("stranice/$page",$data);
        echo view('sabloni/footer');
    }
    
    public function index(){
        $korisnik= new KorisnikModel;
        $korIme= $korisnik->find();
        if($korisnik->where("KorisnickoIme", $korIme)->where('VIP',1)){
            $this->poziv('korisnik_pocetna_vip',[]);
        }
        else{
             $this->poziv('index',[]);
        }
    }
    
    public function proveriVip(){
        if(!$this->validate(['pogo'=>'required'])){
            return $this->poziv('korisnik_pocetna_vip',['errors'=>$this->validator->getErrors()]);
        }
        $kor=new KorisnikModel();
        
        $korisnik=$this->session->get('KorisnickoIme');
        $kor->update($korisnik,['pogodnosti'=>$this->request->getVar('pogodnosti')]);
        
        $this->session->destroy();
        
        return redirect()->to(base_url('/Korisnik'));
        
    }
     public function logout() {
        $this->session->destroy();
        return redirect()->to(site_url('/'));
    }
        

	//--------------------------------------------------------------------

}


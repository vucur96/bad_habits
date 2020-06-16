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
    
    public function zahtevikorisnika(){
            $zahtevKorModel = new ZahtevKorisnikModel();
            $zahtevKor = $zahtevKorModel->where('tip', 3)->findAll();
            $zahtevSpo = $zahtevKorModel->where('tip', 1)->findAll();
            $zahtevTre = $zahtevKorModel->where('tip', 2)->findAll();
            $this->poziv('zahtevikorisnika',['zahtevKor' => $zahtevKor,'zahtevSpo' => $zahtevSpo,'zahtevTre' => $zahtevTre]);
    }
    
    
    public function prihvati(){
            $zahtevKorModel = new ZahtevKorisnikModel();
            $KorModel = new KorisnikModel();
            $zahtev=$zahtevKorModel->where("KorisnickoIme", $korIme)->where("email", $email)->where("loznika", $loz)->
                    where("tip", $tip)->where("VIP", $vip)->where("pogodnosti", $pogodnost)->where("ime", $ime)->where("prezime", $prezime)->
                    where("datumrodj", $datum)->where("visina", $visina)->where("tezina", $tezina)->where("imefirme",$imefirme)->where("opisdel", $del)->
                    where("vrstarek", $rek)->where("cilj", $cilj)->where("kurs", $kurs);
            $KorModel->insert([
                "KorisnickoIme"=>$korIme,
                "email" => $email,
                "loznika" => $loz,
                "tip" => $tip,
                "VIP" => $vip,
                "pogodnosti" => $pogodnost,
                "ime" =>  $ime,
                "prezime" => $prezime,
                "datumrodj" =>  $datum,
                "visina" =>  $visina,
                "tezina" =>  $tezina,
                "imefirme" => $imefirme,
                "opisdel" => $del,
                "vrstarek" => $rek,
                "cilj" =>  $cilj,
                "kurs" => $kurs
            ]);
            $zahtevKorModel->where("KorisnickoIme", $korIme)->delete();
    }
    
    
   public function odbij(){
         $zahtevKorModel = new ZahtevKorisnikModel();
         $zahtevKorModel->where("KorisnickoIme", $korIme)->delete();
    }
    
      public function admin_meni(){
            $this->poziv('admin_meni',[]);
    }
    
   public function promenastatusa(){
         $promenaModel = new KorisnikModel();
            $statusi = $promenaModel->where( 'tip',3 )->where( 'VIP',0 )->findAll();
        $this->poziv('promenastatusa',['statusi' => $statusi]);
       
    }   
    
    
    
    public function brisanjekorisnika(){
            $korisnik = new KorisnikModel();
            $korisnici = $korisnik->findAll();
            $this->poziv('brisanjekorisnika',['korisnici' => $korisnici]);
    }
    
    public function obrisi(){
        $korisnik = new KorisnikModel();
        $korIme = $korisnik->find();
         $korisnik->where("KorisnickoIme", $korIme)->delete();
    }
    
    
    public function zahtevizablog(){
            $this->poziv('zahtevizablog',[]);
    }
    
    public function adminblog() {
            $this->poziv('adminblog',[]);
    }
         
    public function ispisi_korisnike(){}
    public function promeni_status(){}
    public function ispisi_blogove(){}    
        
        
        
        

	//--------------------------------------------------------------------

}

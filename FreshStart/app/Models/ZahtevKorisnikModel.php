<?php
    namespace App\Models;
    
    use CodeIgniter\Model;
    
class ZahtevKorisnikModel extends Model{
    protected $table      = 'zahtevkorisnik';
    protected $primaryKey = 'KorisnickoIme';
    protected $returnType     = 'object';
    protected $allowedFields = ['KorisnickoIme', 'email','lozinka', 'tip','VIP', 'pogodnosti','ime', 'prezime','datumrodj', 'visina','tezina', 'imefirme','opisdel', 'vrstarek','cilj', 'kurs'];
    
    public function dohvatiTip($tip){
        $korModel=new ZahtevKorisnikModel();
        $tipKor= $korModel->find($tip);
        if($tipKor==1){
            return 'Sponzor';
        }
        else{
            if($tipKor==2){
                return 'Trener';
            }
            else{
                return 'Korisnik';
            }
        }
        return null;
    }
    
}
    
  
   
	
  

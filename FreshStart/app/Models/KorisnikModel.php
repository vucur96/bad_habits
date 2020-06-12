<?php
    namespace App\Models;
    
    use CodeIgniter\Model;
    
class KorisnikModel extends Model{
    protected $table      = 'korisnik';
    protected $primaryKey = 'KorisnickoIme';
    protected $returnType     = 'object';
    protected $allowedFields = ['KorisnickoIme', 'email','lozinka', 'tip','VIP', 'pogodnosti','ime', 'prezime','datumrodj', 'visina','tezina', 'imefirme','opisdel', 'vrstarek','cilj', 'kurs'];
    
    
    public function dohvatiTip($korIme){
        $korisnik=$this->find($korIme);
        if($korisnik->tip==1){
            return 'Sponzor';
        }
        else{
            if($korisnik->tip==2){
                return 'Trener';
            }
            else{
                return 'Korisnik';
            }
        }
        return null;
    }
}
    
  
   
	
  

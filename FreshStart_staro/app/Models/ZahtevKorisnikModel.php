<?php
    namespace App\Models;
    
    use CodeIgniter\Model;
    
class ZahtevKorisnikModel extends Model{
    protected $table      = 'zahtevkorisnik';
    protected $primaryKey = 'KorisnickoIme';
    protected $returnType     = 'object';
    protected $allowedFields = ['KorisnickoIme', 'email','lozinka', 'tip','VIP', 'pogodnosti','ime', 'prezime','datumrodj', 'visina','tezina', 'imefirme','opisdel', 'vrstarek','cilj', 'kurs'];
    
}
    
  
   
	
  

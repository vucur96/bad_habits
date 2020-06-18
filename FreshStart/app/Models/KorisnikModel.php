<?php
    namespace App\Models;
    
use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;
    
class KorisnikModel extends Model{
    protected $table      = 'korisnik';
    protected $primaryKey = 'KorisnickoIme';
    protected $returnType     = 'object';
    protected $allowedFields = ['KorisnickoIme', 'email','lozinka', 'tip','VIP', 'pogodnosti','ime', 'prezime','datumrodj', 'visina','tezina', 'imefirme','opisdel', 'vrstarek','cilj', 'kurs'];
    
}
    
  
   
	
  

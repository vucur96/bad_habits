<?php
    namespace App\Models;
    
    use CodeIgniter\Model;
    
class TerminModel extends Model{
    protected $table      = 'termin';
    protected $primaryKey = 'TerID';
    
    protected $returnType     = 'object';
    
    protected $allowedFields = ['TerID','dan','pocetak','kraj', 'KorisnickoIme','kurs'];
    
}
    
  
   
	
  

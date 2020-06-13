<?php
    namespace App\Models;
    
    use CodeIgniter\Model;
    
class PrijavljenModel extends Model{
    protected $table      = 'prijavljen';
    protected $primaryKey = 'KorisnickoIme';
    
    protected $returnType     = 'object';
    
    protected $allowedFields = ['KorisnickoIme', 'TreID'];
    
}
    
  
   
	
  

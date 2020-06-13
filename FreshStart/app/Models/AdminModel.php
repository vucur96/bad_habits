<?php
    namespace App\Models;
    
    use CodeIgniter\Model;
    
class AdminModel extends Model{
    protected $table      = 'admin';
    protected $primaryKey = 'KorisnickoIme';
    
    protected $returnType     = 'object';
    
    // protected $allowedFields = ['KorisnickoIme','lozinka'];

}
    
  
   
	
  

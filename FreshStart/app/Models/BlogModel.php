<?php
    namespace App\Models;
    
    use CodeIgniter\Model;
    
class BlogModel extends Model{
    protected $table      = 'blog';
    protected $primaryKey = 'BlogID';
    
    protected $returnType     = 'object';
    
    protected $allowedFields = ['naslov', 'tekst','KorisnickoIme'];

}
    
  
   
	
  

<?php
    namespace App\Models;
    
    use CodeIgniter\Model;
    
class ZahtevBlogModel extends Model{
    protected $table      = 'zahtevblog';
    protected $primaryKey = 'BlogID';
    
    protected $returnType     = 'object';
    
    protected $allowedFields = ['naslov', 'tekst','KorisnickoIme'];

}
    
  
   
	
  

<?php
    namespace App/Models;
    
    use CodeIgniter\Model;
    
class TreningModel extends Model{
    protected $table      = 'trening';
    protected $primaryKey = 'TreID';
    
    protected $returnType     = 'object';
    
    protected $allowedFields = ['naziv', 'maxbroj','zauzeto', 'tip'];
    
}
    
  
   
	
  

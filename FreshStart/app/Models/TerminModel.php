<?php
    namespace App/Models;
    
    use CodeIgniter\Model;
    
class TerminModel extends Model{
    protected $table      = 'termin';
    protected $primaryKey = 'TerID,TreID';
    
    protected $returnType     = 'object';
    
    protected $allowedFields = ['TerID','TreID','dan','pocetak','kraj', 'brojkolikovezbaca'];
    
}
    
  
   
	
  

<?php
    namespace App/Models;
    
    use CodeIgniter\Model;
    
class RasporedModel extends Model{
    protected $table      = 'raspored';
    protected $primaryKey = 'RasID, TreID';
    
    protected $returnType     = 'object';
    
    protected $allowedFields = ['TreID','grupni', 'individualni','mesec'];
    
}
    
  
   
	
  

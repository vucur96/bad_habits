<?php;

use CodeIgniter/Model;
/**
 * Description of ModelAdmin
 *
 * @author Nina
 */
class ModelAdmin  extends Model{
    public $admin;
    
    public function _konstrukcija(){
        parent::_konstrukcija();
        $this->admin=NULL;
    }

    public function dodajadmina($korIme,$lozinka) {
        $this->db->set("korisnickoIme",$korIme);
        $this->db->set("loznika",$lozinka);
}

}

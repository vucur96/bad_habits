<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

/**
 * Description of Korisnik
 *
 * @author ivalekovic
 */
abstract class Korisnik extends BaseController{
   
    public function _konstrukcija(){
        parent::_konstrukcija();
        $this->load->model("ModelKorisnik");
    }
    public function index(){
        redirect("Gost");
    }
    
}

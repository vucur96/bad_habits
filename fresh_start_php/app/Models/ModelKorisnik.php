<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelKorisnik
 *
 * @author ivalekovic
 */
use CodeIgniter\Model;
class ModelKorisnik extends Model{
    public $korisnik;
    
    public function _konstrukcija(){
        parent::_konstrukcija();
        $this->korisnik=NULL;
    }
    
    public function postojikorisnik($username){
        $rez=$this->db->where('username',$username)->get('korisnik');
        $korisnik=$rez->row;
        if($korisnik!=NULL){
            $this->korisnik=$korisnik;
            return TRUE;
        }
        else{ return FALSE;}
    }
    
    public function dodajnovogkor($username,$email,$password,$reppassword,$tip){
        $this->db->set("username",$username);
        $this->db->set("email",$email);
        $this->db->set("password",$password);
        $this->db->set("password",$reppassword);
        $this->db->set("tip",$tip);
        if($tip=="korisnik"){
           $this->dodajkor($ime,$prezime,$datumrodj,$visina,$tezina,$cilj);
        }
        else{
            if($tip=="sponzor"){
                $this->dodajspon($imefr, $delatnost, $vrstarek);
            }
             else{
                 $this->dodajtr($ime, $prezime, $datumrodj, $kurs);
             }        
        }
    }
    public function dodajkor($ime,$prezime,$datumrodj,$visina,$tezina,$cilj) {
         $this->db->set("ime",$ime);
         $this->db->set("prezime",$prezime);
         $this->db->set("datumrodj",$datumrodj);
         $this->db->set("visina",$visina);
         $this->db->set("tezina",$tezina);
         $this->db->set("cilj",$cilj);
         $this->db->insert("korisnik");
    }
    public function dodajtr($ime,$prezime,$datumrodj,$kurs){
         $this->db->set("ime",$ime);
         $this->db->set("prezime",$prezime);
         $this->db->set("datumrodj",$datumrodj);
         $this->db->set("kurs",$kurs);
         $this->db->insert("trener");
    }
    public function dodajspon($imefr,$delatnost,$vrstarek){
         $this->db->set("imefr",$imefr);
         $this->db->set("delatnost",$delatnost);
         $this->db->set("vrstarek",$vrstarek);
         $this->db->insert("sponzor");
    }
}

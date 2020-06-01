<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gost
 *
 * @author Vucur
 */
class Gost extends CI_Controller{
    public function _konstrukcija(){
        parent::_konstrukcija();
        $this->load->model("ModelKorisnik");
        $this->load->model("ModelAdmin");
    }
        
    public function login(){
        
        $postoji=$this->ModelKorisnik->postojikorisnik($this->input->post('username'));
    
        if($postoji){
            $dobraLozinka=$this->ModelKorisnik->lozinka_provera($this->input->post('password'));
            if(dobraLozinka){
                $korisnik=$this->ModelKorisnik->korisnik;
                $this->sesson->set_userdata('username',$korisnik->KorisnickoIme);
                $this->sesson->set_userdata('tip',$korisnik->tip);
                redirect("Gost");
            }
        }
        $podaci['poruka']="Uneli ste pogresano korisnicko ime ili lozinku";
        $this->otvori("login.php",$podaci);
        
    }
    
    public function registrujMe(){
        
        $podaci=[];
        $greske=[];
        
        proveri($podaci, $greske, 'username', "Nije uneto korisnicko ime!");
        proveri($podaci, $greske, 'email', "Nije unet email!");
        proveri($podaci, $greske, 'password', "Nije uneta lozinka!");
        proveri($podaci, $greske, 'confirmed', "Potvrda lozinke nije uneta!");
        proveri($podaci, $greske, 'tip', "Nije izabran tip!");
        
        
        //TODO ispis gresaka ili cuvanje u bazu
        
    }
    
    public function proveri(&$podaci, &$greske, $polje, $poruka) {
        if($this->input->post($polje)){
            $podaci[$polje]=$this->input->post($polje);
        }else{
            $greske[$polje]=$poruka;
        }
    }
    
    public function index(){
        redirect("Gost");
    }

    public function prijava(){
        $this->otvori("login.php");
    }
    
    public function registracija(){
        $this->otvori("registracija.php");
    }
    
    public function treninzi(){
        $this->otvori("classes.php");
    }
    
    public function treneri(){
        $this->otvori("o_trenerima.php");
    }
    
    public function blog(){
        $this->otvori("blog.php");
    }
    
    public function kontakt(){
        $this->otvori("contact.php");
    }
    
    public function individualni(){
        $this->otvori("classes-single.php");
    }
    public function cardio(){
        $this->otvori("cardio.php");
    }
    public function funkcionalni(){
        $this->otvori("funkcionalni.php");
    }
    
    public function yoga(){
        $this->otvori("yoga.php");
    }
    
    public function aerobic(){
        $this->otvori("aerobic.php");
    }
    
    public function karate(){
        $this->otvori("karate.php");
    }
    
    public function bodyPump(){
        $this->otvori("body_pump.php");
    }
    
    public function snaga(){
        $this->otvori("snaga.php");
    }
    
    private function otvori($stranica=NUll,$podaci=NUll){
        $this->load->view("head_foot/header.php");
        if($stranica!=NUll){
            $this->load->view($stranica,$podaci);
        }
        $this->load->view("head_foot/footer.php");
    }
}

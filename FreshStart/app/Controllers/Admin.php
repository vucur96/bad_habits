<?php namespace App\Controllers;

class Admin extends BaseController
{
         public function index() {
	echo view('sabloni/header_adm');
                  echo view('stranice/admin_meni');
                  echo view('sabloni/footer');
         }
                   
         public function logout() {
                  echo view('sabloni/header');
                  echo view('stranice/index');
                  echo view('sabloni/footer');
         }
         
         public function contact() {
                  echo view('sabloni/header');
                  echo view('stranice/index');
                  echo view('sabloni/footer');
         }
         
         
         
         
        
        
        
        
        

	//--------------------------------------------------------------------

}
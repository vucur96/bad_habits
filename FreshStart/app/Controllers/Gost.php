<?php namespace App\Controllers;

class Gost extends BaseController
{
	public function index()
	{
            echo view('sabloni/header');
            echo view('stranice/index');
            echo view('sabloni/footer');
	}
        
        
        public function login()
	{
            echo view('sabloni/header');
            echo view('stranice/login');
            echo view('sabloni/footer');
	}
        
	//--------------------------------------------------------------------

}



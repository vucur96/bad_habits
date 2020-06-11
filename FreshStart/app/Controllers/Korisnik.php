<?php namespace App\Controllers;

class Korisnik extends BaseController
{
	public function index()
	{
		echo view('sabloni/header');
                echo view('stranice/index');
                echo view('sabloni/footer');
	}
        
        

	//--------------------------------------------------------------------

}


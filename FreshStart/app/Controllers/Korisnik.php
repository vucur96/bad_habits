<?php namespace App\Controllers;

class Korisnik extends BaseController
{
	public function index()
	{
		echo view('sabloni/header_kor');
                echo view('stranice/index');
                echo view('sabloni/footer');
	}
        
        

	//--------------------------------------------------------------------

}


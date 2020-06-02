<?php
	session_start();
	var_dump($_POST);
	
	$poruka="";
	if(empty($_POST['korIme'])){
		$poruka.="Niste uneli korisnicko ime!";
	}
	if(empty($_POST['lozinka'])){
		$poruka.="Niste uneli lozinku!";
	}
	if($poruka!==''){
		$_SESSION['poruka']=$poruka;
		 header('Location:login.php');
		 exit();
	}
	$konekcija=mysqli_connect('localhost','root','','freshstart')
			or die('Konekcija sa bazom nije uspela!');
			
	$imeK=$_POST['korIme'];
	$lozinka=$_POST['lozinka'];
	
	$sql="select KorisnickoIme,lozinka from korisnik " . "where KorisnickoIme='$imeK'";
	
	$rezutat=mysqli_query($konekcija,$sql);
	
	if(mysqli_num_rows($rezultat)==0){
		$_SESSION['poruka']='Korisnik sa unetim korisnickim imenom ne postoji!';
		 header('Location:login.php');
		 exit();
	}
	
	$lozBaza=mysqli_fetch_assoc($rezultat)['lozinka'];
	
	if($lozinka==$lozBaza){
		$_SESSION['KorisnickoIme']=$imeK;
		
		header('Location:index.php');
		 exit();
	}else{
		$_SESSION['poruka']='Niste uneli odgovarajucu lozinku!';
		 header('Location:login.php');
		 exit();
	}
	
	
	
	
	
	
<?php
    require("konekcija.php");
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

			
	$imeK=$_POST['korIme'];
	$lozinka=$_POST['lozinka'];

    $konekcija;

	$sql="SELECT * FROM admin WHERE KorisnickoIme='" . $korIme"'";
	
	$rezutat=mysqli_query($konekcija,$sql) or die ("Greska".mysqli_error($konekcija));
	
	if(mysqli_num_rows($rezultat)==0){
		$_SESSION['poruka']='Korisnik sa unetim korisnickim imenom ne postoji!';
		 header('Location:login.php');
		 exit();
	}
	
	$lozBaza=mysqli_fetch_assoc($rezultat)['lozinka'];
	
	if($lozinka==$lozBaza){
		$_SESSION['korIme']=$imeK;
		
		header('Location:admin_meni.php');
		 exit();
	}else{
		$_SESSION['poruka']='Niste uneli odgovarajucu lozinku!';
		 header('Location:login.php');
		 exit();
	}
	
	?>
	
	
	
	

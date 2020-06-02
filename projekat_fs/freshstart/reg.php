<?php
    session_start();
	var_dump($_POST);
	if(isset($_POST['nastavi'])){
		if($_POST['tip']==1){
			header("Location: sponzor.php");
			exit();
		}
        else{ 
			if($_POST['tip']==2){
				header("Location: trener.php");
				exit();
			}else { 
				if($_POST['tip']==3){
					header("Location: korisnik.php");
					exit();
				}
			}
		}
	}
?>

	<!--<?php
		$upit = "INSERT INTO zahtevkorisnik(KorisnickoIme,email,lozinka,tip) VALUES ('".$_POST['korisnickoIme']."','".$_POST['Email']."','".$_POST['lozinka']."','".$_POST['tip'].")";
		$r = mysqli_query($konekcija, $upit) or die("Greska kod ubacivanja korisnika u tabelu".mysqli_error($konekcija));
        echo"<input type='submit' name= 'nastavi' value='Nastavi'>";
		echo "<font color='red' size='6px'><b>Vaš zahtev za registraciju je poslat amdinu</b></font>";
    ?>-->

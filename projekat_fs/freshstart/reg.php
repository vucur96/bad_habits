<?php
    session_start();
	require("konekcija.php");
	if(!isset($_POST['Nastavi'])){
		if(tip==0){
			header("Location: sponzor.php");
		}
        else if(tip==1){
            header("Location: trener.php");
        }
        else if(tip==2){
            header("Location: korisnik.php");
        }
	}
?>
<html>
<head>
</head>
<body>
	<?php require('header.php'); ?>

	<?php
		$upit = "INSERT INTO zahtevkorisnik(KorisnickoIme,email,lozinka,tip) VALUES ('".$_POST['korisnickoIme']."','".$_POST['Email']."','".$_POST['lozinka']."','".$_POST['tip'].")";
		$r = mysqli_query($konekcija, $upit) or die("Greska kod ubacivanja korisnika u tabelu".mysqli_error($konekcija));
        echo"<input type='submit' name= 'nastavi' value='Nastavi'>";
		echo "<font color='red' size='6px'><b>Vaš zahtev za registraciju je poslat amdinu</b></font>";
    ?>

    <?php require('footer.php') ?>
	
</body>
</html>

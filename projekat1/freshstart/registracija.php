<?php
	session_start();
?>
<html>
<head>                 
</head>	
<body>
<?php require("header.php");?>
			<aside id="colorlib-hero">
                <div class="flexslider">
                    <ul class="slides">
                        <li style="background-image: url(images/img_bg_2.jpg);">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                        <div class="slider-text-inner text-center">
                                            <h1>Registracija</h1>
                                            <h2><span><a href="index.html">Početna</a> | Registracija</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
        <div class="col-md-10 col-md-offset-1 animate-box">
	
	<br>
	<h2>REGISTRACIJA</h2>
<?php
    if(isset($_POST['Nastavi'])){
        $korisnik = '';
        $sifra = '';    }
    $korisnik = $_POST['korisnickoIme'];
	$email = $_POST['Email'];
    $sifra = $_POST['lozinka'];
	$ponovljena = $_POST['PonovoLoz'];
	$tip = $_POST['tip'];
    require("konekcija.php");
	
	if ($korisnik != ''){
		if ($email != ''){
			if($sifra!=''){
				if($ponovljena!=''){
					if($tip!=''){
						if($ponovljena!=$sifra){
							echo "<center><font size='4px' color='#e32319'><b>Ponovljena lozinka i lozinka se ne slazu!</b></font></center>";
						}else{
							$upit1 = "SELECT * FROM korisnik WHERE KorisnickoIme='".$korisnik."'";
							$rezultat1 = mysqli_query($konekcija, $upit1)
									or die("Greska kod upita koji proverava da li uneto korisničko ime postoji u bazi!" . mysqli_error($konekcija));
							if (mysqli_num_rows($rezultat1) == 1) {
								echo "<center><font size='4px' color='#e32319'><b>Korisnicko ime je zauzeto unesite neko drugo!</b></font></center>";
							}else{
								
								$upit2 = "INSERT INTO zahtevkorisnik (KorisnickoIme,email,lozinka,tip,VIP,pogodnosti,Ime,prezime,datumrodj,visina,tezina,Imefirm,opisdel,vrstarek,cilj)"
										. " VALUES ('".$korisnik."','".$email."','".$sifra."','".$tip.")";
								$rezultat2 = mysqli_query($konekcija, $upit1)
										or die("Greska kod upita za upis u bazu!" . mysqli_error($konekcija));
								if($tip==1){
									echo "<script> location.href='sponzor.php'; </script>";
								}
								else{ 
									if($tip==2){
										echo "<script> location.href='trener.php'; </script>";
									}else { 
										echo "<script> location.href='korisnik.php'; </script>";
									}
								}
							}
						}
					}else{
						echo "<center><font size='4px' color='#e32319'><b>Niste uneli tip!</b></font></center>";
					}
				}else{
					echo "<center><font size='4px' color='#e32319'><b>Niste uneli ponovljenu lozinku!</b></font></center>";
				}	
			}else{
				echo "<center><font size='4px' color='#e32319'><b>Niste uneli lozinku!</b></font></center>";
			}
		}else{
			echo "<center><font size='4px' color='#e32319'><b>Niste uneli email!</b></font></center>";
		}
	}else{
		echo "<center><font size='4px' color='#e32319'><b>Niste uneli korisnicko ime!</b></font></center>";
	}
	mysqli_close($konekcija);
?>
	
	<form name='mojaforma' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div class="row form-group">
				<div class="col-md-6">
						<!-- <label for="fname">First Name</label> -->
						<input type="text" name="korisnickoIme" class="form-control" placeholder="Korisnicko ime" >
				</div>
		</div>

		<div class="row form-group">
				<div class="col-md-6">
						<!-- <label for="email">Email</label> -->
						<input type="text" name="Email" class="form-control" placeholder="Your email address">
				</div>
		</div>
								
		<div class="row form-group">
			<div class="col-md-6">
				<!-- <label for="fname">First Name</label> -->
				<input type="password" name="lozinka" class="form-control" placeholder="Lozinka">
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-md-6">
				<!-- <label for="fname">First Name</label> -->
				<input type="password" name="PonovoLoz" class="form-control" placeholder="Ponovljena lozinka">
					</div>
		</div>
		
		<div class="row form-group">
			<input type='radio' id="sponzor" name='tip' value='1' > <label for="sponzor">Sponzor</label>
			<input type='radio' id="trener" name='tip' value='2' > <label for="trener">Trener</label>

			<input type='radio' id="korisnik" name='tip' value='3' > <label for="korisnik">Korisinik</label>
		</div>
					
		<div class="form-group">
				<input name="nastavi" value="Nastavi" type="submit">
		</div>
		
	</form>	
	
	<?php require("footer.php");?>

</body>
</html>

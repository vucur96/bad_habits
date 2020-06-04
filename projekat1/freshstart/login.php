<?php
		require("header_login.php");
	?>
<html>
<head>
</head>
<body>
	
	<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Prijava</h1>
				   					<h2><span><a href="index.html">Početna</a> | Prijava</span></h2>
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
    <h2>PRIJAVA</h2>
<?php
    if(isset($_POST['login'])){
		$korisnik = $_POST['korIme'];
		$sifra = $_POST['lozinka'];
		require("konekcija.php");
		
		if ($korisnik != '') {
			$upit1 = "SELECT * FROM korisnik WHERE KorisnickoIme='".$korisnik."'";
			$rezultat1 = mysqli_query($konekcija, $upit1)
			or die("Greska kod upita da li postoji uneto korisničko ime!" . mysqli_error($konekcija));
			
			if (mysqli_num_rows($rezultat1) == 1) {
				$_SESSION['KorisnickoIme']=$korisnik;
				
				if ($_POST['lozinka'] != '') {
					$upit2 = "SELECT * FROM korisnik WHERE KorisnickoIme='".$korisnik."' AND lozinka='".$sifra."'";
					$rezultat2 = mysqli_query($konekcija, $upit2) or die("Greska kod upita za proveru šifre!" . mysqli_error($konekcija));
					if (mysqli_num_rows($rezultat2) == 1){
						echo "<script> location.href='index_ulogovan.php'; </script>";
					}else{
						echo "<center><font size='4px' color='#e32319'><b>Niste uneli odgovarajucu lozinku!</b></font></center>";
					}
				}else {
					echo "<center><font size='4px' color='#e32319'><b>Niste uneli lozinku!</b></font></center>";
				}
			} else {
				$upit3 = "SELECT * FROM admin WHERE KorisnickoIme='".$korisnik."'";
				$rezultat3 = mysqli_query($konekcija, $upit3)
					or die("Greska kod upita da li postoji uneto korisničko ime!" . mysqli_error($konekcija));
			
				if (mysqli_num_rows($rezultat3) == 1) {
					$_SESSION['KorisnickoIme']=$korisnik;
				
					if ($_POST['lozinka'] != '') {
						$upit4 = "SELECT * FROM admin WHERE KorisnickoIme='".$korisnik."' AND lozinka='".$sifra."'";
						$rezultat4 = mysqli_query($konekcija, $upit4) or die("Greska kod upita za proveru šifre!" . mysqli_error($konekcija));
						if (mysqli_num_rows($rezultat4) == 1){
							echo "<script> location.href='admin_meni.php'; </script>";
						}else{
							echo "<center><font size='4px' color='#e32319'><b>Niste uneli odgovarajucu lozinku!</b></font></center>";
						}
					}else {
						echo "<center><font size='4px' color='#e32319'><b>Niste uneli lozinku!</b></font></center>";
					}
				}else{
					echo "<center><font size='4px' color='#e32319'><b>Ne postoji korisnik sa tim korisnickim imenom!</b></font></center>";
				}
			}
		}else{
			echo "<center><font size='4px' color='#e32319'><b>Niste uneli korisnicko ime!</b></font></center>";
		}
			mysqli_close($konekcija);
	}

?>
	<form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="row form-group">
                    <div class="col-md-6">
                            <!-- <label for="fname">First Name</label> -->
                            <input type="text" name="korIme" class="form-control" placeholder="Korisnicko ime">
                    </div>
            </div>
                            
            <div class="row form-group">
                <div class="col-md-6">
                    <!-- <label for="fname">First Name</label> -->
                    <input type="password" name="lozinka" class="form-control" placeholder="Lozinka">
                </div>
            </div>
                
            <div class="form-group">
					<input name="login" value="Prijavi se" type="submit">
                    <!--<button value="Prijavi se" class="btn btn-primary">Prijavi se</button>-->
            </div>
            <p>Ako ste novi korisnik nastavite sa <a href="registracija.php">Registracijom</a></p>
	</form>	
	</div>
	</div>
	</div>
	</div>
	<?php
		require("footer.php");
	?>	
</body>		
</html>

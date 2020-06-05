<?php
	session_start();
?>
<html>
<head>
</head>
<body>
<?php require('header.php'); ?>
		<aside id="colorlib-hero">
                <div class="flexslider">
                    <ul class="slides">
                        <li style="background-image: url(images/img_bg_2.jpg);">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                        <div class="slider-text-inner text-center">
                                            <h1>Registracija korisnika</h1>
                                            <h2><span><a href="index.html">Početna</a> | Registracija korisnika</span></h2>
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
		<h2>REGISTRACIJA KORISNIKA</h2>
<?php
	if(isset($_SESSION['KorisnickoIme'])){
		$korisnik=$_SESSION['KorisnickoIme'];
	}
    if(isset($_POST['registruj'])){
		$ime = $_POST['ime'];
		$prezime = $_POST['prezime'];
		$datum = $_POST['datumrodj'];
		$visina = $_POST['visina'];
		$tezina = $_POST['tezina'];
		$cilj = $_POST['cilj'];
		require("konekcija.php");
		
		if ($ime != ''){
			if ($prezime != ''){
				if($datum!= ''){
					if($visina!= ''){
						if($tezina!= ''){
							if($cilj!=''){
								$upit1 = "SELECT * FROM zahtevkorisnik WHERE KorisnickoIme='".$korisnik."'";
								$rezultat1 = mysqli_query($konekcija, $upit1)
								or die("Greska kod upita koji proverava da li uneto korisničko ime postoji u bazi!" . mysqli_error($konekcija));
								if (mysqli_num_rows($rezultat1) != 1) {
									echo "<center><font size='4px' color='#e32319'><b>Korisnicko ime ne postoji unesite neko drugo!</b></font></center>";
								}else{
								$upit = "UPDATE zahtevkorisnik SET ime='".$ime."', prezime='".$prezime."', datumrodj='".$datum."', visina='".$visina."', tezina='".$tezina."', cilj='".$cilj."'
											WHERE KorisnickoIme='".$korisnik."'"; 
								$rezultat = mysqli_query($konekcija, $upit)
										or die("Greska kod upita za upis u bazu!" . mysqli_error($konekcija));
								echo "<script> location.href='logout.php'; </script>";
								}
							}else{
								echo "<center><font size='4px' color='#e32319'><b>Niste uneli vas cilj!</b></font></center>";
							}
						}else{
							echo "<center><font size='4px' color='#e32319'><b>Niste uneli tezinu!</b></font></center>";
						}
					}else{
						echo "<center><font size='4px' color='#e32319'><b>Niste uneli visinu!</b></font></center>";
					}	
				}else{
					echo "<center><font size='4px' color='#e32319'><b>Niste uneli datum!</b></font></center>";
				}
			}else{
				echo "<center><font size='4px' color='#e32319'><b>Niste uneli prezime!</b></font></center>";
			}
		}else{
			echo "<center><font size='4px' color='#e32319'><b>Niste uneli ime!</b></font></center>";
		}
		mysqli_close($konekcija);
	}
?>
		<form name="registracijakor" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			
			<div class="row form-group">
				<div class="col-md-6">
					<!-- <label for="fname">First Name</label> -->
					<input type="text" name="ime" class="form-control" placeholder="Vaše ime" >
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
					<!-- <label for="fname">First Name</label> -->
					<input type="text" name="prezime" class="form-control" placeholder="Vaše prezime" >
						</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
				
					<input type="date" name="datumrodj" class="form-control" placeholder="Datum rodjenja" min="1930-01-01">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-4">
					<!-- <label for="fname">First Name</label> -->
					<input type="number" name="visina" class="form-control" placeholder="Vaša visina(u cm)" min="100" max="250">
						</div>
			</div>
			<div class="row form-group">
				<div class="col-md-4">
					<!-- <label for="fname">First Name</label> -->
					<input type="number" name="tezina" class="form-control" placeholder="Vaša težina(u kg)" min="30" max="500">
						</div>
			</div>
			<div class="row form-group">
			   <div>
				   <p> Vaš cilj: </p>
				   <textarea name="cilj" rows="5" cols="30"></textarea>
				   </div>
			</div>
		

			<div class="form-group">
				<input type="submit" value="Registruj me" name ="registruj" class="btn btn-primary">
			</div>
		</form>	
	</div>
   <?php require('footer.php') ?>
		
</body>
</html>

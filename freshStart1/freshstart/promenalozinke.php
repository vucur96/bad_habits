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
									<h1>Promena lozinke</h1>
									<h2><span><a href="index.html">Početna</a> | Promena lozinke</span></h2>
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
	<h2>PROMENA LOZINKE</h2>
	
	<?php
		if(isset($_POST['Promeni'])){
			$korisnik = $_POST['korIme'];
			$stara = $_POST['staraLoz'];
			$nova = $_POST['novaLoz'];
			$potvrdaLoz = $_POST['potvrda'];

			require("konekcija.php");
			
			if ($korisnik != ''){
				if ($stara != ''){
					if($nova!= ''){
						if($potvrdaLoz!= ''){
							if($potvrdaLoz==$nova){
								$upit1 = "SELECT * FROM korisnik WHERE KorisnickoIme='".$korisnik."'";
								$rezultat1 = mysqli_query($konekcija, $upit1)
								or die("Greska kod upita koji proverava da li uneto korisničko ime postoji u bazi!" . mysqli_error($konekcija));
								if (mysqli_num_rows($rezultat1) != 1) {
									echo "<center><font size='4px' color='#e32319'><b>Korisnicko ime ne postoji!</b></font></center>";
								}else{
                                        $upit2 = "SELECT * FROM korisnik WHERE lozinka='".$stara."'";
                                        $rezultat1 = mysqli_query($konekcija, $upit2)
                                        or die("Greska kod upita koji proverava da li je uneta dobra stara lozinka!" . mysqli_error($konekcija));
                                        if (mysqli_num_rows($rezultat1) != 1) {
                                            echo "<center><font size='4px' color='#e32319'><b>Nije uneta dobra stara lozinka!!</b></font></center>";
                                        }else{
                                            if(true){
										$upit = "UPDATE korisnik SET lozinka='".$nova."'
													WHERE KorisnickoIme='".$korisnik."'"; 
										$rezultat = mysqli_query($konekcija, $upit)
												or die("Greska kod upita za upis u bazu!" . mysqli_error($konekcija));
										echo "<script> location.href='index.php'; </script>";
									}else{
										echo "<center><font size='4px' color='#e32319'><b>Niste uneli ispravnu staru lozinke!</b></font></center>";
									}
								}
                                    
                                }
							}else{
								echo "<center><font size='4px' color='#e32319'><b>Potvrda nove lozinke se ne poklapa sa unetom novom lozinkom!</b></font></center>";
							}
						}else{
							echo "<center><font size='4px' color='#e32319'><b>Niste uneli potvrdu lozinke!</b></font></center>";
						}	
					}else{
						echo "<center><font size='4px' color='#e32319'><b>Niste uneli novu lozinku!</b></font></center>";
					}
				}else{
					echo "<center><font size='4px' color='#e32319'><b>Niste uneli staru lozinku!!</b></font></center>";
				}
			}else{
				echo "<center><font size='4px' color='#e32319'><b>Niste uneli korisnicko ime!</b></font></center>";
			}
			mysqli_close($konekcija);
		}
	
	?>
	
		<form name='mojaforma' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		
			<div class="row form-group">
				<div class="col-md-6">
					<!-- <label for="fname">First Name</label> -->
					<input type="text" name="korIme" class="form-control" placeholder="Korisnicko ime">
						</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
					<!-- <label for="fname">First Name</label> -->
					<input type="password" name="staraLoz" class="form-control" placeholder="Stara lozinka">
						</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
					<!-- <label for="fname">First Name</label> -->
					<input type="password" name="novaLoz" class="form-control" placeholder="Nova lozinka">
						</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
					<!-- <label for="fname">First Name</label> -->
					<input type="password" name="potvrda" class="form-control" placeholder="Potvrda nove lozinke">
						</div>
			</div>

			<div class="form-group">
				<input type="submit" value="Promeni" name ="Promeni" class="btn btn-primary">
			</div>
		</form>		
					</div>
				</div>
			</div>
		
<?php require('footer.php') ?>
</body>
</html>

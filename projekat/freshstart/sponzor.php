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
                                            <h1>Registracija sponzora</h1>
                                            <h2><span><a href="index.php">Početna</a> | Registracija sponzora</span></h2>
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
<h2>REGISTRACIJA SPONZORA </h2>

<?php
    if(isset($_SESSION['KorisnickoIme'])){
        $korisnik=$_SESSION['KorisnickoIme'];
    }
    if(isset($_POST['registruj'])){
        $imefirme = $_POST['imefirme'];
        $opisdel = $_POST['opisdel'];
        $vrstarek=$_POST['vrstarek'];
        
		require("konekcija.php");
		
			if ($imefirme != ''){
				if($opisdel!=''){
						if($vrstarek!=''){
							$upit1 = "SELECT * FROM zahtevkorisnik WHERE KorisnickoIme='".$korisnik."'";
							$rezultat1 = mysqli_query($konekcija, $upit1)
							or die("Greska kod upita koji proverava da li uneto korisničko ime postoji u bazi!" . mysqli_error($konekcija));
							if (mysqli_num_rows($rezultat1) != 1) {
								echo "<center><font size='4px' color='#e32319'><b>Korisnicko ime ne postoji unesite neko drugo!</b></font></center>";
							}else{
								$upit = "UPDATE zahtevkorisnik SET imefirme='".$imefirme."', opisdel='".$opisdel."', vrstarek='".$_POST['vrstarek']."'
								WHERE KorisnickoIme='".$korisnik."'";
								$rezultat = mysqli_query($konekcija, $upit)
								or die("Greska kod upita za upis u bazu!" . mysqli_error($konekcija));
								echo "<script> location.href='logout.php'; </script>";
							}
						}else{    echo "<center><font size='4px' color='#e32319'><b>Niste uneli vrstu reklame!</b></font></center>";
							
						}
				}
						else{
							"<center><font size='4px' color='#e32319'><b>Niste uneli opis delatnosti Vase firme!</b></font></center>";
							
						}
			}else{
							echo "<center><font size='4px' color='#e32319'><b> Niste uneli ime firme!</b></font></center>";
							
						}
							mysqli_close($konekcija);
	}
?>

        <form name='registracijaspon' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input type="text" name="imefirme" class="form-control" placeholder="Ime Vaše firme" required>
								</div>
							</div>
                            <div class="row form-group">
                                <div>
                                    <p> Opis delatnosti firme: </p>
                                    <textarea name="opisdel" rows="5" cols="50"required></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <p>Vrsta reklame koju želite:</p>
                               <p> <input type='checkbox' name='vrstarek' value='proizvod'>Reklamiranje Vašeg proizovda u teretani</p>
                               <p> <input type='checkbox' name='vrstarek' value='poster'>Reklamiranje Vaše firme u vidu postera</p>
                               <p> <input type='checkbox' name='vrstarek' value='flajer'>Reklamiranje Vaših flajera</p>
                                        
                            </div>
							<div class="form-group">
								<input type="submit" value="Registruj me" name ="registruj" class="btn btn-primary">
							</div>
						</form>		

<?php require("footer.php") ?>


</body>
</html>

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
		<br>
		<h2>REGISTRACIJA KORISNIKA</h2>
<?php
    if(isset($_POST['Registruj'])){
        $ime = '';
        $prezime = '';
		$datumrodj = '';
		$visina = '';
		$tezina = '';}
    $ime = $_POST['ime'];
	$prezime = $_POST['prezime'];
    $datum = $_POST['datumrodj'];
	$visina = $_POST['visina'];
	$tezina = $_POST['tezina'];
    require("konekcija.php");
	
	if ($ime != ''){
		if ($prezime != ''){
			if($datum!= ''){
				if($visina!= ''){
					if($tezina!= ''){
						$upit2 = "UPDATE zahtevkorisnik SET ime ='".$ime."',prezime ='".$prezime."',datumrodj ='".$datum."',visina ='".$visina."',tezina='".$tezina."' "
                                    . "WHERE korisnickoime='".$korisnik."'";
						$rezultat2 = mysqli_query($konekcija, $upit1)
								or die("Greska kod upita za upis u bazu!" . mysqli_error($konekcija));
						header("Location:index.php");
						exit();
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
?>
		<form name="registracijakor" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<div class="row form-group">
				<div class="col-md-6">
					<!-- <label for="fname">First Name</label> -->
					<input type="text" name="ime" class="form-control" placeholder="Vaše ime" required>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
					<!-- <label for="fname">First Name</label> -->
					<input type="text" name="prezime" class="form-control" placeholder="Vaše prezime" required>
						</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
				
					<input type="date" name="datumrodj" class="form-control" placeholder="Datum rodjenja" min="1930-01-01"required>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-4">
					<!-- <label for="fname">First Name</label> -->
					<input type="number" name="visina" class="form-control" placeholder="Vaša visina(u cm)" min="100" max="250"required>
						</div>
			</div>
			<div class="row form-group">
				<div class="col-md-4">
					<!-- <label for="fname">First Name</label> -->
					<input type="number" name="tezina" class="form-control" placeholder="Vaša težina(u kg)" min="30" max="500" required>
						</div>
			</div>
			<div class="row form-group">
			   <div>
				   <p> Vaš cilj: </p>
				   <textarea name="cilj" rows="5" cols="30"></textarea>
				   </div>
			</div>
		

			<div class="form-group">
<input type="submit" value="Nastavi"  name="nastavi">
</div>
		</form>		
			</div>
		</div>
	</div>
   <?php require('footer.php') ?>
		
</body>
</html>

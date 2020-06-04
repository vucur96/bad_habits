<?php 
	session_start();
?>
<html>
<head>
</head>
<body>
<?php 
	if(!isset($_SESSION['KorisnickoIme'])){
		require('header.php');
	}else{
		require("konekcija.php");
		$upit2 = "SELECT * FROM korisnik WHERE KorisnickoIme='".$_SESSION['KorisnickoIme']."'";
		$rezultat2 = mysqli_query($konekcija, $upit2) or die("Greska kod upita za proveru šifre!" . mysqli_error($konekcija));
		if (mysqli_num_rows($rezultat2) == 1){
			$red = mysqli_fetch_array($rezultat2);
			$tip = $red['tip'];
			
			if($tip==2){
				require('header_tren.php');
			}else{
				if ($tip==3){
					require('header_kor.php');
			}
		}else{
			require('header.php');
		}
		mysqli_close($konekcija);
	}
?>
<aside id="colorlib-hero">
<div class="flexslider">
<ul class="slides">
<li style="background-image: url(images/img_bg_2.jpg);">
<div class="overlay"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
<div class="slider-text-inner text-center">
<h1>Raspored</h1>
<h2><span><a href="index.php">Početna</a> | Raspored</span></h2>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>

<div id="colorlib-schedule" class="colorlib-light-grey">
<div class="container">
<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Raspored treninga</h2>
						<p>Nudimo vam veliki broj termina za grupne kao i individualne treninge. Prijavite se za odgovarajući trening i trenirajte sa najboljima!</p>
					</div>
				</div>
				<div class="row">
					<div class='col-md-12'>
						<h2> <a href="grupni_treninzi.php"> Raspored grupnih treninga </a></h2>
						<h2> <a href="individualni_treninzi.php"> Raspored individualnih treninga </a></h2>

					</div>
					
					</div>
				</div>
			</div>
<?php require('footer.php') ?>
</body>
</html>
	
		


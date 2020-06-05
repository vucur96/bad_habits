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
			
			if($tip==1){
				require('header_spon.php');
			}else{
				if ($tip==2){
					require('header_tren.php');
				}else{
					require('header_kor.php');
				}
			}
		}else{
			require('header_adm.php');
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
<h1>Treneri</h1>
<h2><span><a href="index.php">Treneri</a> | O nama</span></h2>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>

<div id="colorlib-about">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2 row-pb-md animate-box">

						<div class="video colorlib-video" style="background-image: url(images/img_bg_1.jpg);">
							<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-play3"></i></a>
							<div class="overlay"></div>
						</div>

					<div class="col-md-10 col-md-offset-1 text-center animate-box">
						<div class="about-wrap">
							<div class="heading-2">
								<h2>FreshStart za novi početak Vašeg zdravijeg, poboljšanog života!</h2>
							</div>
                
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-trainers">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Naši iskusni treneri</h2>
						<p>Upoznajte ljude koji su licencirani da Vam pomognu u promeni vaše ishrane i vašeg zdravlja, kao i ljude koji mogu dovesti vaše telo do savršenog izgleda kojem težite!</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(images/trainer-1.jpg)"></div>
							<div class="desc">
								<h3>Pera Perić</h3>
								<span>Trener</span>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(images/trainer-2.jpg)"></div>
							<div class="desc">
								<h3>Ana Mirić</h3>
								<span>Trener</span>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(images/trainer-3.jpg)"></div>
							<div class="desc">
								<h3>Nina Rakić</h3>
								<span>Trener</span>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(images/trainer-4.jpg)"></div>
							<div class="desc">
								<h3>Nikola Nidzić</h3>
								<span>Trener</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php require('footer.php') ?>
</body>
</html>
		

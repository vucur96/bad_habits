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
<h1>Treninzi</h1>
<h2><span><a href="index.php">Početna</a> | Treninzi</span></h2>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>

		<div class="colorlib-classes">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/cardio.jpg);">
								
							</div>
							<div class="desc">
								<h3><a href="cardio.php">Cardio</a></h3>
								
								<p><a href="cardio.php" class="btn-learn">VIŠE <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/funkcionalni.jpg);">
								
							</div>
							<div class="desc">
								<h3><a href="funkcionalni.php">Funkcionalni trening</a></h3>
								
                                                                <p><a href="funkcionalni.php" class="btn-learn">VIŠE <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/aerobic.jpeg);">
								
							</div>
							<div class="desc">
                                                            <h3><a href="aerobic.php">Aerobic</a></h3>
								
                                                            <p><a href="aerobic.php" class="btn-learn">VIŠE <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/bodyPump.jpg);">
								
							</div>
							<div class="desc">
								<h3><a href="body_pump.php">Body Pump</a></h3>
								
								<p><a href="body_pump.php" class="btn-learn">VIŠE <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/yoga.jpg);">
								
							</div>
							<div class="desc">
                                                            <h3><a href="yoga.php">Yoga</a></h3>
								
                                                            <p><a href="yoga.php" class="btn-learn">VIŠE <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/karate.jpg);">
								
							</div>
							<div class="desc">
                                                            <h3><a href="karate.php">Karate</a></h3>
								
                                                            <p><a href="karate.php" class="btn-learn">VIŠE <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/snaga.jpg);">
							
							</div>
							<div class="desc">
                                                            <h3><a href="snaga.php">Trening snage</a></h3>
								
                                                            <p><a href="snaga.php" class="btn-learn">VIŠE <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>	
		</div>
<?php require('footer.php') ?>
</body>
</html>
		

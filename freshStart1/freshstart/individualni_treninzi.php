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
<h2><span><a href="index.php">Početna</a> | Raspored | Grupni treninzi</span></h2>
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

<br>
						<h2>Raspored individualnih treninga</h2>
						<p>Rezervišite mesto na vašem omiljenom treningu</p>
					</div>
				</div>
				<div class="row">
					<div class="schedule text-center animate-box">
						<div class="col-md-12">
							<ul class="week">
								<li class="active"><a href="#">Nedelja</a></li>
								<li><a href="#">Ponedeljak</a></li>
								<li><a href="#">Utorak</a></li>
								<li><a href="#">Sreda</a></li>
								<li><a href="#">Četvrtak</a></li>
								<li><a href="#">Petak</a></li>
								<li><a href="#">Subota</a></li>
							</ul>
						</div>
						<div class="schedule-flex">
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-weightlifting"></i></span></p>
								<p class="time"><span>12am - 01pm</span></p>
								<h3>Termin 1</h3>
                                <p class="trainer"><span>Ana Mirić</span></p>
                                <button type="button">Odaberi</button>
                                <h5> Status: <p id='zauzeto1'></p></h5> 
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-weightlifting"></i></span></p>
								<p class="time"><span>02pm - 03pm</span></p>
								<h3>Termin 2</h3>
                                <p class="trainer"><span>Pera Perić</span></p>
                                <button type="button">Odaberi</button>
                                <h5> Status: <p id='zauzeto2'></p></h5> 
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-weightlifting"></i></span></p>
								<p class="time"><span>07pm - 08pm</span></p>
								<h3>Termin 3</h3>
                                <p class="trainer"><span>Nina Rakić</span></p>
                                <button type="button">Odaberi</button>
                                <h5> Status: <p id='zauzeto3'></p></h5> 
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-weightlifting"></i></span></p>
								<p class="time"><span>08pm - 09pm</span></p>
								<h3>Termin 4</h3>
                                <p class="trainer"><span>Pera Perić</span></p>
                                <button type="button">Odaberi</button>
                                <h5> Status: <p id='zauzeto4'></p></h5> 
							</div>
						</div>
						<div class="schedule-flex">
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-weightlifting"></i></span></p>
								<p class="time"><span>09pm - 10pm</span></p>
								<h3>Termin 5</h3>
                                <p class="trainer"><span>Nina Rakić</span></p>
                                <button type="button">Odaberi</button>
                                <h5> Status: <p id='zauzeto5'></p></h5> 
                                
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-weightlifting"></i></span></p>
								<p class="time"><span>10pm - 11pm</span></p>
								<h3>Termin 6</h3>
                                <p class="trainer"><span>Pera Perić</span></p>
                                <button type="button">Odaberi</button>
                                <h5> Status: <p id='zauzeto6'></p></h5> 
							</div>
							
						</div>
					</div>
				</div>
			</div>

<?php require('footer.php') ?>
</body>
</html>

		
		

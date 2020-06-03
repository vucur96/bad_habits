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
						<h2>Raspored grupnih treninga</h2>
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
								<p class="icon"><span><i class="flaticon-gym"></i></span></p>
								<p class="time"><span>08am - 09am</span></p>
								<h3>Aerobic</h3>
                                <p class="trainer"><span>Ana Mirić</span></p>
                                <button type="button">Odaberi</button>
                                <h5> Preostalo mesta: <p id='naPotezu'></p></h5> 
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-exercise-2"></i></span></p>
								<p class="time"><span>09am - 10am</span></p>
								<h3>Cardio</h3>
                                <p class="trainer"><span>Pera Perić</span></p>
                                <button type="button">Odaberi</button>
                                <h5> Preostalo mesta: <p id='naPotezu'></p></h5> 
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-meditation"></i></span></p>
								<p class="time"><span>10am - 11am</span></p>
								<h3>Yoga</h3>
                                <p class="trainer"><span>Nina Rakić</span></p>
                                <button type="button">Odaberi</button>
                                <h5> Preostalo mesta: <p id='naPotezu'></p></h5> 
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-weightlifting"></i></span></p>
								<p class="time"><span>11am - 12am</span></p>
								<h3>Snaga</h3>
                                <p class="trainer"><span>Pera Perić</span></p>
                                <button type="button">Odaberi</button>
                                <h5> Preostalo mesta: <p id='naPotezu'></p></h5> 
							</div>
						</div>
						<div class="schedule-flex">
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-martial-arts"></i></span></p>
								<p class="time"><span>03pm - 04pm</span></p>
								<h3>Karate</h3>
                                <p class="trainer"><span>Nina Rakić</span></p>
                                <button type="button">Odaberi</button>
                                <h5> Preostalo mesta: <p id='naPotezu'></p></h5> 
                                
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-weightlifting"></i></span></p>
								<p class="time"><span>04pm - 05pm</span></p>
								<h3>Body Pump</h3>
                                <p class="trainer"><span>Pera Perić</span></p>
                                <button type="button">Odaberi</button>
                                <h5> Preostalo mesta: <p id='naPotezu'></p></h5> 
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-meditation"></i></span></p>
								<p class="time"><span>05pm - 06pm</span></p>
								<h3>Yoga</h3>
                                <p class="trainer"><span>Nina Rakić</span></p>
                                <button type="button">Odaberi</button>
                                <h5> Preostalo mesta: <p id='naPotezu'></p></h5> 
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-weightlifting"></i></span></p>
								<p class="time"><span>06pm - 07pm</span></p>
								<h3>Funkcionalni</h3>
                                <p class="trainer"><span>Ana Mirić</span></p>
                                <button type="button">Odaberi</button>
                                <h5> Preostalo mesta: <p id='naPotezu'></p></h5> 
							</div>

						</div>
					</div>
				</div>
			</div>
		
<?php require('footer.php') ?>
</body>
</html>

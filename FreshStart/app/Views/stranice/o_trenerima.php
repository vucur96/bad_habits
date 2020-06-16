
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
<h1>Treneri</h1>
<h2><span><a href="<?php echo site_url(' Gost/index')?>">Treneri</a> | O nama</span></h2>
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
                                                                      <div align="center">
				 <table border='2px' cellpadding='5px' style='width:70%;text-align:center;'>
                                     <tr><td width="25%"><b>Ime</b></td><td width="25%"><b>Prezime</b></td><td width="25%"><b>Korisnicko ime</b></td> <td width="25%"><b>Trening</b></td></tr> 
<?php
foreach ($treneri as $trener) {
    echo "<tr><td>{$trener->ime}</td><td>{$trener->prezime}</td><td>{$trener->KorisnickoIme}</td><td>{$trener->kurs}</td></tr>";
    
}
?>
</table>	
                                                                          <br><br>

					

					

					
				</div>
			</div>
		</div>

</body>
</html>
		


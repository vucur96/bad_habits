
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
<h1>Raspored</h1>
<h2><span><a href="<?php echo site_url('index') ?>">Početna</a> | Raspored</span></h2>
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
                                     <div align="center">
					<table border="4px" cellpadding="5px" style="width:70%;text-align:center;">
                                            <tr><td width="20%"><b>Datum</b></td>
                                                <td width="20%"><b>Vreme pocetka</b></td>
                                                <td width="20%"><b>Vreme kraja</b></td>
                                                <td width="20%"><b>Trener</b></td>
                                                <td width="20%"><b>Trening</b></td> </tr>   
<?php
foreach ($termini as $termin) {
    echo "<tr><td>{$termin->dan}</td><td>{$termin->pocetak}</td><td>{$termin->kraj}</td><td>{$termin->KorisnickoIme}</td><td>{$termin->kurs}</td></tr>";
    
}
?>
</table>
					
					</div>
        </div>
				</div>
			</div>

</body>
</html>
	
		


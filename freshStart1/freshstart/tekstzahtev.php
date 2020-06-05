<?php
session_start();
require("konekcija.php");
?>


<head>
        <meta charset="UTF-8">
        <title>Tekst zahtev</title>  
 </head>
 
 
<?php
    if(!isset($_SESSION['KorisnickoIme'])){
        require('header.php');
    }else{
        require("konekcija.php");
        require('header_adm.php');
        
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
<h1>ADMIN BLOG</h1>
<h2><span><a href="admin_meni.php">Početna</a></span></h2>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>

					<div class="col-md-10 col-md-offset-1 animate-box">
						
							<div align="center">
							<?php
							$upit = "SELECT BlogID FROM zahtevblog WHERE naslov = '".$_POST['naslov']."'";
							$rez = mysqli_query($konekcija, $upit) or die("Greska kod tekst zahteva!" . mysqli_error($konekcija));
							
								   echo "<table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>";
								   
								   echo "<tr><td> ";
								   
								   echo "</table>";
							
							?>
							</div>
							
							
					</div>
					
<div>
<?php require("footer.php") ?>
</div>

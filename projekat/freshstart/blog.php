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
			require('header.php');
		}
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
<h1>Blog</h1>
<h2><span><a href="index.php">Početna</a> | Blog</span></h2>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>

<div class="colorlib-blog">
<div class="container">
<div class="row">
<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.php" class="blog-img" style="background-image: url(images/blog-1.jpg);">
								<p class="meta"><span class="day">20</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<p class="admin"><span>Objavio/la:</span> <span>Ana Mikić</span></p>
								<h2><a href="blog.php">Potrebna vam je motivacija za vežbanje?</a></h2>
								
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.php" class="blog-img" style="background-image: url(images/blog-2.jpg);">
								<p class="meta"><span class="day">21</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<p class="admin"><span>Objavio/la:</span> <span>Dragan Nikolić</span></p>
								<h2><a href="blog.html">Učešće na biciklijadi</a></h2>
								
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.php" class="blog-img" style="background-image: url(images/blog-3.jpg);">
								<p class="meta"><span class="day">22</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<p class="admin"><span>Objavio/la:</span> <span>Nikola Lazić</span></p>
								<h2><a href="blog.php">Pravilan način ishrane</a></h2>
							
							</div>
						</article>
					</div>
				</div>

<div id="menu">
<div align="center">
<?php
    $upit = "SELECT * FROM blog";
    $rez = mysqli_query($konekcija, $upit) or die ("Greska kod pregleda zahteva za blog". mysqli_error($konekcija));
    if (mysqli_num_rows($rez) > 0){
        
        echo " <table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>";
        
        
        while ( $niz = mysqli_fetch_array($rez)){
            
            
            echo "<tr> <td> <a href='blog.php?BlogID=".$niz['naslov']."'> ".$niz['naslov']." </a></td>  ";
            
        }
        echo "</table><br><br>";
    }else{
        echo "</br></br></br>";
        echo "<font face:'Gill' size='6'><b>Nema zahteva za blog.</b></font>";
        echo "<style type='text/css'>body{ height:89vh; }</style>";
    }
    
    
    
    
    ?>


</div>
</div>

<div>
<?php require('footer.php') ?>
</body>
</html>
	
	
		

<?php
	session_start();
?>

<head>
  <title>Admin meni</title>
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
<a href="admin_meni.php"><h1>ADMIN MENI</h1></a>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>

<div class="col-md-10 col-md-offset-1 animate-box">

						
						
						<br><br>
							
                
							<div class="form-group" >
								<button onclick="window.location.href='zahtevikorisnika.php'" class="btn btn-primary" > Zahtevi korisnika </button>
							</div>
							<div class="form-group">
								<button  onclick="window.location.href='brisanjekorisnika.php'" class="btn btn-primary" > Brisanje korisnika </button>
							</div>
							<div class="form-group">
								<button  onclick="window.location.href='promenastatusa.php'" class="btn btn-primary" > Promena statusa </button>
							</div>
							<div class="form-group">
								<button  onclick="window.location.href='adminblog.php'" class="btn btn-primary" > Blog </button>
							</div>
				
						
</div>
	
	
<?php require("footer.php") ?>



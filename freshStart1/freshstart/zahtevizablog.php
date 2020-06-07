<?php
    session_start();
	require("konekcija.php");
    ?>
<head>
        <meta charset="UTF-8">
        <title>Zahtevi za blog</title>  
    </head>
	
	 <div id="header">
       <?php require("header_adm.php"); ?> 
        
      </div>


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
		<div id="menu">
             <div align="center">
                 <?php 
                  $upit = "SELECT * FROM zahtevblog";
                  $rez = mysqli_query($konekcija, $upit) or die ("Greska kod pregleda zahteva za blog". mysqli_error($konekcija));
				  echo "<br>";
                  if (mysqli_num_rows($rez) > 0){  
					
                   echo " <table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>";
                        
						
                  while ( $niz = mysqli_fetch_array($rez)){
                     
                      
                      echo "<tr> <td> <a href='tekstzahtev.php?naslov=".$niz['naslov']."'> ".$niz['naslov']." </a></td>  ";
                      
                     }
					echo "</table>";
                  }else{
                      echo "</br></br></br>";
                      echo "<font face:'Gill' size='6'><b>Nema zahteva za blog.</b></font>";
                      echo "<style type='text/css'>body{ height:89vh; }</style>";
                  }
		
		
		
		
		?>
		</div>
		</div>
		
		
		
		 <?php 
            require("footer.php");
        ?>

<?php
session_start();
require("konekcija.php");


?>


    <head>
        <meta charset="UTF-8">
        <title>Brisanje korisnika</title>  
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
    
    
        <div id="header">
       <?php require("header_adm.php"); ?> 
        </div>
        <div id="menu">
            <div align="center">
			
			<?php
                $upit = "SELECT * FROM korisnik";
                $rez = mysqli_query($konekcija, $upit) or die("Greska kod upita za uzimanje informacija o korisnicima!" . mysqli_error($konekcija));
                if (mysqli_num_rows($rez)> 0){
					
                   echo "<table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
						
                        <tr>
                            <td width='20%'><b>Korisnicko ime</b></td>
                            <td width='20%'><b>Ime</b></td>
                            <td width='20%'><b>Prezime</b></td>
                            <td width='20%'><b>Tip</b></td>
                            <td width='20%'></td>
                        </tr>";
						
                while ( $red = mysqli_fetch_array($rez)){
                        
                   echo "<tr> <td> ".$red['KorisnickoIme']." </td> <td> ".$red['ime']."</td> <td>".$red['prezime']." </td> <td> ".$red['tip']." </td>";
				   echo "<td><a href='brisi.php?korIme=".$red['KorisnickoIme']."' class='btn btn-primary'> Obrisi</a></td>";
                   
                    
                 }
				 echo "</tr></table>";
				 
                } else {
                    echo "<center><font size='6px'><b>Ne postoji ni jedan korisnik u sistemu!</b></font></center>";
                  }     
               ?>      
              </div>
        </div>
        <?php 
            require("footer.php");
        ?>
  
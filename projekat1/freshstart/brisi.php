<?php
session_start();
require("konekcija.php");
?>


<head>
        <meta charset="UTF-8">
        <title>Obrisan korisnik</title>  
 </head>
 
 <div id="header">
       <?php require("header_adm.php"); ?> 
        </div>
        <div id="menu">
            <div align="center">
			<?php
			$upit = "DELETE FROM korisnik WHERE KorisnickoIme = '".$_GET['korIme']."'";
			$rez = mysqli_query($konekcija, $upit) or die("Greska kod delete upita!" . mysqli_error($konekcija));
			
			echo "<center><font size='6px'><b>Obirsan korisnik <font color='#e32319'>".$_GET['korIme']."</b></font></center>";
			?>
			</div>
			</div>
			
			<?php 
            require("footer.php");
        ?>
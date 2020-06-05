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
		<div id="menu">
             <div align="center">
                 <?php 
                  $upit = "SELECT * FROM zahtevblog";
                  $rez = mysqli_query($konekcija, $upit) or die ("Greska kod pregleda zahteva za blog". mysqli_error($konekcija));
                  if (mysqli_num_rows($rez) > 0){  
					
                   echo " <table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>";
                        
						
                  while ( $niz = mysqli_fetch_array($rez)){
                     
                      
                      echo "<tr> <td> <a href='tekstzahtev.php?naslov=".$niz['naslov']."'> ".$niz['naslov']." </a></td>  ";
                      
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
		
		
		
		 <?php 
            require("footer.php");
        ?>
		
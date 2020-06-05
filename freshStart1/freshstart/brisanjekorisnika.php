<?php
session_start();
require("konekcija.php");


?>


    <head>
        <meta charset="UTF-8">
        <title>Brisanje korisnika</title>  
    </head>
    
    
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
				 echo "</br>";
                } else {
                    echo "<center><font size='6px'><b>Ne postoji ni jedan korisnik u sistemu!</b></font></center>";
                  }     
               ?>      
              </div>
        </div>
        <?php 
            require("footer.php");
        ?>
  
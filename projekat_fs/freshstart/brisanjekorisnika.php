<?php
session_start();
require("konekcija.php");

if (isset($_POST['Obrisi'])){
    $upit = "DELETE FROM korisnik WHERE korisnickoime = '".$_GET['kor_ime']."'";
    $rez = mysqli_query($konekcija, $upit) or die("Greska kod delete upita!".mysqli_error($konekcija));
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Brisanje korisnika</title>  
    </head>
    
    <body>
        <div id="header">
       <?php require('header_adm.php'); ?> 
        </div>
        <div id="menu">
            <center>
			<?php
                $q = "SELECT * FROM korisnik";
                $r = mysqli_query($konekcija, $q) or die("Greska kod upita za uzimanje informacija o korisnicima!" . mysqli_error($konekcija));
                if (mysqli_num_rows($r)> 0){
                   echo "<table border='0px' cellpadding='1px' style='text-align:center;'>
                        <tr>
                            <td width='25%'><b>Korisnicko ime</b></td>
                            <td width='25%'><b>Ime</b></td>
                            <td width='25%'><b>Prezime</b></td>
                            <td width='25%'><b>Tip</b></td>
                            <td width='25%'></td>
                        </tr>";
                while ( $red = mysqli_fetch_array($r)){
                        
                   echo "<tr> <td> ".$red['korisnickoime']." </td> <td> ".$red['ime']."</td> <td>".$red['prezime']." </td> <td> ".$red['tip']." </td>";
				   echo "<td><input type='submit' name='obrisi' value=' Obrisi '></td>";
                      
                 }
                 echo "</table>";
                } else {
                    echo "<center><font size='6px'><b>Ne postoji ni jedan korisnik u sistemu!</b></font></center>";
                  }     
               ?>      
            </center>    
        </div>
        <?php 
            require("footer.php");
        ?>
  </body>
</html>
<?php
session_start();
require("konekcija.php");

if (isset($_POST['Prihvati'])){
    $upit = "UPDATE korisnik SET prihvacen=1 WHERE korisnickoime='".$_POST['kor_ime']."'";
    $rez = mysqli_query($konekcija, $upit) or die("Greska kod update upita!".mysqli_error($konekcija));
}
if (isset($_POST['Odbij'])){
    $upit = "DELETE FROM korisnik WHERE korisnickoime = '".$_POST['kor_ime']."'";
    $rez = mysqli_query($konekcija, $upit) or die("Greska kod delete upita!".mysqli_error($konekcija));
}
?>

<html>
    <head>
        <title>Zahtevi</title>
        	
    </head>
	
	<body>
       <?php require('header_adm.php') ?> 
        <div id="menu">
             <div align="center">
                 <?php 
                  $q = "SELECT * FROM korisnik WHERE tip='".$_POST['korisnik']."' ";
                  $r = mysqli_query($konekcija, $q) or die ("Greska kod pregleda zahteva za registraciju". mysqli_error($konekcija));
                  if (mysqli_num_rows($r) > 0){
                   echo " <h2 style='color:black;'>Zahtevi korisnika</h2>";   
                  while ( $niz = mysqli_fetch_array($r)){
                     
                      echo "<form name='form_requests' method='POST' action='".$_SERVER['PHP_SELF']."'>
                        <table border='0px' cellpadding='1px' style='text-align:center;'>
                        <tr>
                            <td width='25%'><b>Ime</b></td>
                            <td width='25%'><b>Prezime</b></td>
                            <td width='25%'></td>
                            <td width='25%'></td>
                        </tr>";
                      echo "<tr> <td> <input type='hidden' value='".$niz['korisnickoime']."' name='kor_ime' > ".$niz['ime']." </td> <td> ".$niz['prezime']." </td> ";
                      echo "<td><input type='submit' name='prihvati' value=' Prihvati '></td><td><input type='submit' name='odbij' value=' Odbij '></td>";
                      echo "</tr></table></form>";
                     }   
                  }else{
                      echo "</br></br></br>";
                      echo "<font face:'Gill' size='6'><b>Nema zahteva.</b></font>";
                      echo "<style type='text/css'>body{ height:89vh; }</style>";
                  }

				
				$q = "SELECT * FROM korisnik WHERE tip='".$_POST['trener']."' ";
                  $r = mysqli_query($konekcija, $q) or die ("Greska kod pregleda zahteva za registraciju". mysqli_error($konekcija));
                  if (mysqli_num_rows($r) > 0){
                   echo " <h2 style='color:black;'>Zahtevi trenera</h2>";   
                  while ( $niz = mysqli_fetch_array($r)){
                     
                      echo "<form name='form_requests' method='POST' action='".$_SERVER['PHP_SELF']."'>
                        <table border='0px'>
                        <tr>
                            <td width='20%'><b>Ime</b></td>
                            <td width='20%'><b>Prezime</b></td>
							<td width='20%'><b>Kurs</b></td>
                            <td width='20%'></td>
                            <td width='20%'></td>
                        </tr>";
                      echo "<tr> <td> <input type='hidden' value='".$niz['korisnickoime']."' name='kor_ime' > ".$niz['ime']." </td> <td> ".$niz['prezime']." </td> <td> ".$niz['kurs']." </td> ";
                      echo "<td><input type='submit' name='prihvati' value=' Prihvati '></td><td><input type='submit' name='odbij' value=' Odbij '></td>";
                      echo "</tr></table></form>";
                     }   
                  }else{
                      echo "</br></br></br>";
                      echo "<font face:'Gill' size='6'><b>Nema zahteva.</b></font>";
                      echo "<style type='text/css'>body{ height:89vh; }</style>";
                  }
				  
				  
				  $q = "SELECT * FROM korisnik WHERE tip='".$_POST['sponzor']."' ";
                  $r = mysqli_query($konekcija, $q) or die ("Greska kod pregleda zahteva za registraciju". mysqli_error($konekcija));
                  if (mysqli_num_rows($r) > 0){
                   echo " <h2 style='color:black;'>Zahtevi sponzora</h2>";   
                  while ( $niz = mysqli_fetch_array($r)){
                     
                      echo "<form name='form_requests' method='POST' action='".$_SERVER['PHP_SELF']."'>
                        <table border='0px'>
                        <tr>
                            <td width='25%'><b>Ime firme</b></td>
                            <td width='25%'><b>Opis delatnosti</b></td>
							<td width='25%'></td>
                            <td width='25%'></td>

                        </tr>";
                      echo "<tr> <td> <input type='hidden' value='".$niz['korisnickoime']."' name='kor_ime' >  ".$niz['ime firme']."  </td> <td> ".$niz['opis del']." </td> ";
                      echo "<td><input type='submit' name='prihvati' value=' Prihvati '></td><td><input type='submit' name='odbij' value=' Odbij '></td>";
                      echo "</tr></table></form>";
                     }   
                  }else{
                      echo "</br></br></br>";
                      echo "<font face:'Gill' size='6'><b>Nema zahteva.</b></font>";
                      echo "<style type='text/css'>body{ height:89vh; }</style>";
                  }
				  
                ?>
            </div>
        </div>
        <?php require('footer.php') ?>
    </body>
</html>

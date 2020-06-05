<?php
session_start();
require("konekcija.php");

if (isset($_POST['prihvati'])){
		
	$upit = "INSERT INTO korisnik (KorisnickoIme, email, lozinka, tip,ime,prezime,datumrodj,visina,tezina,imefirme,opisdel,vrstarek,cilj,kurs)
			SELECT KorisnickoIme, email, lozinka, tip,ime,prezime,datumrodj,visina,tezina,imefirme,opisdel,vrstarek,cilj,kurs FROM zahtevkorisnik 
			WHERE KorisnickoIme='".$_POST['korIme']."'";
			
	$rez = mysqli_query($konekcija, $upit) or die("Greska kod ubacivanja korisnika u tabelu!".mysqli_error($konekcija));
	
	$upit = "DELETE FROM zahtevkorisnik WHERE KorisnickoIme =  '".$_POST['korIme']."'";
	
    $rez = mysqli_query($konekcija, $upit) or die("Greska kod delete upita!".mysqli_error($konekcija));
}
if (isset($_POST['odbij'])){
    $upit = "DELETE FROM zahtevkorisnik WHERE KorisnickoIme = '".$_POST['korIme']."'";
    $rez = mysqli_query($konekcija, $upit) or die("Greska kod delete upita!".mysqli_error($konekcija));
}
?>


    <head>
	
        <meta charset="UTF-8">
        <title>Zahtevi</title>
        	
    </head>
	
	
      <div id="header">
       <?php require("header_adm.php"); ?> 
        
        <div id="menu">
             <div align="center">
                 <?php 
                  $upit = "SELECT * FROM zahtevkorisnik WHERE tip=3 ";
                  $rez = mysqli_query($konekcija, $upit) or die ("Greska kod pregleda zahteva za registraciju". mysqli_error($konekcija));
                  if (mysqli_num_rows($rez) > 0){
                   echo " <h2>Zahtevi korisnika</h2>";  
					echo "<form name='form_requests' method='POST' action='".$_SERVER['PHP_SELF']."'>
                        <table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                            <td width='25%'><b>Ime</b></td>
                            <td width='25%'><b>Prezime</b></td>
                            <td width='25%'></td>
                            <td width='25%'></td>
                        </tr>";
						
                  while ( $niz = mysqli_fetch_array($rez)){
                     
                      
                      echo "<tr> <td> <input type='hidden' value='".$niz['KorisnickoIme']."' name='korIme' > ".$niz['ime']." </td> <td> ".$niz['prezime']." </td> ";
                      echo "<td><input type='submit' class='btn btn-cta' name='prihvati' value=' Prihvati '></td><td><input type='submit' class='btn btn-primary' name='odbij' value=' Odbij '></td></tr>";
                      
                     }
					echo "</table></form>";
                  }else{
                      echo "</br></br></br>";
                      echo "<font face:'Gill' size='6'><b>Nema zahteva za korisnika.</b></font>";
                      echo "<style type='text/css'>body{ height:89vh; }</style>";
                  }

				
				$upit = "SELECT * FROM zahtevkorisnik WHERE tip=2 ";
                $rez = mysqli_query($konekcija, $upit) or die ("Greska kod pregleda zahteva za registraciju". mysqli_error($konekcija));
                  if (mysqli_num_rows($rez) > 0){
                   echo " <h2>Zahtevi trenera</h2>";   
                     
                      echo "<form name='form_requests' method='POST' action='".$_SERVER['PHP_SELF']."'>
                        <table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                            <td width='20%'><b>Ime</b></td>
                            <td width='20%'><b>Prezime</b></td>
							<td width='20%'><b>Kurs</b></td>
                            <td width='20%'></td>
                            <td width='20%'></td>
                        </tr>";
						
						
                  while ( $niz = mysqli_fetch_array($rez)){
					  
                      echo "<tr> <td> <input type='hidden' value='".$niz['KorisnickoIme']."' name='korIme' > ".$niz['ime']." </td> <td> ".$niz['prezime']." </td> <td> ".$niz['kurs']." </td>  ";
                      echo "<td><input type='submit' class='btn btn-cta' name='prihvati' value=' Prihvati '></td><td><input type='submit' class='btn btn-primary' name='odbij' value=' Odbij '></td></tr>";
                      
                     } 
					echo "</table></form>";
                  }else{
                      echo "</br></br></br>";
                      echo "<font face:'Gill' size='6'><b>Nema zahteva za trenera.</b></font>";
                      echo "<style type='text/css'>body{ height:89vh; }</style>";
                  }
				  
				  
				  $upit = "SELECT * FROM zahtevkorisnik WHERE tip=1 ";
                  $rez = mysqli_query($konekcija, $upit) or die ("Greska kod pregleda zahteva za registraciju". mysqli_error($konekcija));
                  if (mysqli_num_rows($rez) > 0){
                   echo " <h2>Zahtevi sponzora</h2>";   
                     
                      echo "<form name='form_requests' method='POST' action='".$_SERVER['PHP_SELF']."'>
                        <table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                            <td width='25%'><b>Ime firme</b></td>
                            <td width='25%'><b>Opis delatnosti</b></td>
							<td width='25%'></td>
                            <td width='25%'></td>

                        </tr>";
						
						while ( $niz = mysqli_fetch_array($rez)){
                  
                      echo "<tr> <td> <input type='hidden' value='".$niz['KorisnickoIme']."' name='korIme' >  ".$niz['imefirme']."  </td> <td> ".$niz['opisdel']." </td> ";
                      echo "<td><input type='submit' class='btn btn-cta' name='prihvati' value=' Prihvati '></td><td><input type='submit' class='btn btn-primary' name='odbij' value=' Odbij '></td></tr>";
                         }   
						 echo "</table></form>";

                  }else{
                      echo "</br></br></br>";
                      echo "<font face:'Gill' size='6'><b>Nema zahteva za sponzora.</b></font>";
                      echo "<style type='text/css'>body{ height:89vh; }</style>";
                  }
				  
                ?>
            </div>
        </div>
		
		
        <?php require("footer.php") ?>
    

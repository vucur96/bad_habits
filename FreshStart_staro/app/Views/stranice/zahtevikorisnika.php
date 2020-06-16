<?php
 $konekcija = mysqli_connect("localhost:3308","root","") or die
            ("Greska prilikom konekcije!". mysqli_connect_error());
    
    mysqli_select_db($konekcija,"freshstart") or 
            die ("Greska kod biranja baze podataka!");
    mysqli_set_charset($konekcija, "utf8");

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

             <div align="center">
                
  <?php
  
                        
            if($zahtevKor){
                        echo "<h2>Zahtevi korisnika</h2>";
                        echo "<form name='form_requests' method='POST' action='".$_SERVER['PHP_SELF']."'>";
                        
                        echo   "<table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                            <td width='25%'><b>Ime</b></td>
                            <td width='25%'><b>Prezime</b></td>
                            <td width='25%'></td>
                            <td width='25%'></td>
                        </tr>";
                     
            foreach ($zahtevKor as $zahtevkorisnik) {
            echo "<tr><input type='hidden' value='".$zahtevkorisnik->KorisnickoIme."' name='korIme' ><td>{$zahtevkorisnik->ime}</td><td>{$zahtevkorisnik->prezime}</td>";
            echo "<td><input type='submit'  class='btn btn-cta'  name='prihvati' value='Prihvati' ></td><td><input type='submit' class='btn btn-primary' name='odbij' value=' Odbij ' ></td></tr>";
            }
            echo "</table></form>";
            
        }
            else {
                        echo "</br></br></br>";
                        echo "<font face:'Gill' size='6'><b>Nema zahteva za korisnika.</b></font>";
                        echo "<style type='text/css'>body{ height:89vh; }</style>";
            }
  
            
 
            if($zahtevTre){
                        echo "<h2>Zahtevi trenera</h2>";
                        echo "<form name='form_requests' method='POST' action='".$_SERVER['PHP_SELF']."'>";
                        echo   "<table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                            <td width='20%'><b>Ime</b></td>
                            <td width='20%'><b>Prezime</b></td>
                            <td width='20%'><b>Kurs</b></td>
                            <td width='20%'></td>
                            <td width='20%'></td>
                        </tr>";
                     
                        foreach ($zahtevTre as $zahtevkorisnik) {
                         echo "<tr><input type='hidden' value='".$zahtevkorisnik->KorisnickoIme."' name='korIme' ><td>{$zahtevkorisnik->ime}</td><td>{$zahtevkorisnik->prezime}</td><td>{$zahtevkorisnik->kurs}</td>";
                         echo "<td><input type='submit' class='btn btn-cta' name='prihvati' value=' Prihvati '></td><td><input type='submit' class='btn btn-primary' name='odbij' value=' Odbij '></td></tr>";
                        }
                        echo "</table></form>";
                        
           }
            else {
                        echo "</br></br></br>";
                        echo "<font face:'Gill' size='6'><b>Nema zahteva za trenera.</b></font>";
                        echo "<style type='text/css'>body{ height:89vh; }</style>";
            }
  
            
 
           if($zahtevSpo){
                        echo "<h2>Zahtevi sponzora</h2>";
                        echo "<form name='form_requests' method='POST' action='".$_SERVER['PHP_SELF']."'>";

                        echo   "<table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                           <td width='25%'><b>Ime firme</b></td>
                            <td width='25%'><b>Opis delatnosti</b></td>
                            <td width='25%'></td>
                            <td width='25%'></td>
                        </tr>";
                     
                       foreach ($zahtevSpo as $zahtevkorisnik) {
                       echo "<tr><input type='hidden' value='".$zahtevkorisnik->KorisnickoIme."' name='korIme' ><td>{$zahtevkorisnik->imefirme}</td><td>{$zahtevkorisnik->opisdel}</td>";
                      echo "<td><input type='submit' class='btn btn-cta' name='prihvati' value=' Prihvati '></td><td><input type='submit' class='btn btn-primary' name='odbij' value=' Odbij '></td></tr>";
                    }  
                    echo "</table></form>";
           }
            else {
                        echo "</br></br></br>";
                        echo "<font face:'Gill' size='6'><b>Nema zahteva za sponzora.</b></font>";
                        echo "<style type='text/css'>body{ height:89vh; }</style>";
            }
  
            
?>
              
       
  </div>

<head>
	
        <meta charset="UTF-8">
        <title>Zahtevi</title>
        	
    </head>

             <div align="center">
                 
	<form name='form_requests'  action="<?php echo site_url("Admin/zahtevikorisnika") ?>"  method="POST">
  <?php
  
                        
            if($zahtevKor){
                        echo "<h2>Zahtevi korisnika</h2>";
                        echo   "<table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                            <td width='25%'><b>Ime</b></td>
                            <td width='25%'><b>Prezime</b></td>
                            <td width='25%'></td>
                            <td width='25%'></td>
                        </tr>";
                     
            foreach ($zahtevKor as $zahtevkorisnik) {
            echo "<tr><td>{$zahtevkorisnik->ime}</td><td>{$zahtevkorisnik->prezime}</td>";
            echo "<td><input type='submit'  class='btn btn-cta'  name='prihvati' value='Prihvati' ></td><td><input type='submit' class='btn btn-primary' name='odbij' value=' Odbij ' ></td></tr>";
            }
            echo "</table>";
            
        }
            else {
                        echo "</br></br></br>";
                        echo "<font face:'Gill' size='6'><b>Nema zahteva za korisnika.</b></font>";
                        echo "<style type='text/css'>body{ height:89vh; }</style>";
            }
  
            
 
            if($zahtevTre){
                        echo "<h2>Zahtevi trenera</h2>";
                        echo   "<table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                            <td width='20%'><b>Ime</b></td>
                            <td width='20%'><b>Prezime</b></td>
                            <td width='20%'><b>Kurs</b></td>
                            <td width='20%'></td>
                            <td width='20%'></td>
                        </tr>";
                     
                        foreach ($zahtevTre as $zahtevkorisnik) {
                         echo "<tr><td>{$zahtevkorisnik->ime}</td><td>{$zahtevkorisnik->prezime}</td><td>{$zahtevkorisnik->kurs}</td>";
                         echo "<td><input type='submit' class='btn btn-cta' name='prihvati' value=' Prihvati '></td><td><input type='submit' class='btn btn-primary' name='odbij' value=' Odbij '></td></tr>";
                        }
                        echo "</table>";
                        
           }
            else {
                        echo "</br></br></br>";
                        echo "<font face:'Gill' size='6'><b>Nema zahteva za trenera.</b></font>";
                        echo "<style type='text/css'>body{ height:89vh; }</style>";
            }
  
            
 
           if($zahtevSpo){
                        echo "<h2>Zahtevi sponzora</h2>";
                        echo   "<table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                           <td width='25%'><b>Ime firme</b></td>
                            <td width='25%'><b>Opis delatnosti</b></td>
                            <td width='25%'></td>
                            <td width='25%'></td>
                        </tr>";
                     
                       foreach ($zahtevSpo as $zahtevkorisnik) {
                       echo "<tr><td>{$zahtevkorisnik->imefirme}</td><td>{$zahtevkorisnik->opisdel}</td>";
                      echo "<td><input type='submit' class='btn btn-cta' name='prihvati' value=' Prihvati '></td><td><input type='submit' class='btn btn-primary' name='odbij' value=' Odbij '></td></tr>";
                    }  
                    echo "</table>";
           }
            else {
                        echo "</br></br></br>";
                        echo "<font face:'Gill' size='6'><b>Nema zahteva za sponzora.</b></font>";
                        echo "<style type='text/css'>body{ height:89vh; }</style>";
            }
  
            
?>
              
        </form>
  </div>
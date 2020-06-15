<head>
        <meta charset="UTF-8">
        <title>Brisanje korisnika</title>  
 </head>
 
 
        <div align="center">
                 
	<form name='form_requests'  action="<?= site_url("Admin/obrisi")?>"  method="POST">
  <?php
            if($korisnici){
                        echo   "<table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                            <td width='20%'><b>Korisnicko ime</b></td>
                            <td width='20%'><b>Ime</b></td>
                            <td width='20%'><b>Prezime</b></td>
                            <td width='20%'><b>Tip</b></td>
                            <td width='20%'></td>
                        </tr>";
                     
            foreach ($korisnici as $korisnik) {
            echo "<tr><td>{$korisnik->KorisnickoIme}</td><td>{$korisnik->ime}</td><td>{$korisnik->prezime}</td><td>{$korisnik->tip}</td>";
            echo "<td><input type='submit'  class='btn btn-primary'  name='obrisi' value='Obrisi' ></td>";
            }
            echo "</table>";
            
        }
           
        else {
                        echo "</br></br></br>";
                        echo "<center><font size='6px'><b>Ne postoji ni jedan korisnik u sistemu!</b></font></center>";
            }
     ?>

        </form>
        </div>
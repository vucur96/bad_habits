 <head>
	
        <meta charset="UTF-8">
        <title>Promena statusa</title>
        	
    </head>
    
   
             <div align="center">
  
  	<form name='form_status' method="post" action="<?= site_url("$controller/promenastatusa") ?>">
  <?php
            if($statusi)  {
                echo   "<table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                            <td width='25%'><b>Korisnicko ime</b></td>
                            <td width='25%'><b>Ime</b></td>
                            <td width='25%'><b>Prezime</b></td>
                            <td width='25%'></td>
                        </tr>";
                        
             foreach ($statusi as $status) {
            echo "<tr><td>{$status->KorisnickoIme}</td><td>{$status->ime}</td><td>{$status->prezime}</td>";
            echo "<td><input type='submit' class='btn btn-cta' name='promeni' value=' Promeni u VIP'></td></tr>";
            
            }
            echo "</table>";
                        
            }
            else {
                        echo "</br></br></br>";
                        echo "<center><font size='6px'><b>Ne postoji ni jedan korisnik u sistemu.</b></font></center>";
            }
            
         
    
?>
  </form>
  </div>
  

	



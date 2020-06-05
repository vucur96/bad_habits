<?php
session_start();
require("konekcija.php");

if (isset($_POST['promeniuvip'])){
    $upit = "UPDATE korisnik SET VIP=1 WHERE KorisnickoIme='".$_POST['korIme']."'";
    $rez = mysqli_query($konekcija, $upit) or die("Greska pri promeni statusa!".mysqli_error($konekcija));
}
?>


    <head>
        <meta charset="UTF-8">
        <title>Promena statusa</title>  
    </head>
    
    
        <div id="header">
       <?php require("header_adm.php"); ?> 
        </div>
        <div id="menu">
            <div align="center">
			<?php
                $upit = "SELECT * FROM korisnik WHERE tip=3 AND VIP=0";
                $rez = mysqli_query($konekcija, $upit) or die("Greska kod upita za uzimanje informacija o korisnicima!" . mysqli_error($konekcija));
                if (mysqli_num_rows($rez)> 0){
                   echo "<form name='form_requests' method='POST' action='".$_SERVER['PHP_SELF']."'>
				   <table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                            <td width='25%'><b>Korisnicko ime</b></td>
                            <td width='25%'><b>Ime</b></td>
                            <td width='25%'><b>Prezime</b></td>
                            <td width='25%'></td>
                        </tr>";
                while ( $red = mysqli_fetch_array($rez)){
                        
                   echo "<tr> <td> <input type='hidden' value='".$red['KorisnickoIme']."' name='korIme' >".$red['KorisnickoIme']." </td> <td> ".$red['ime']."</td> <td>".$red['prezime']." </td>";
				   echo "<td><input type='submit' class='btn btn-primary' name='promeniuvip' value=' Promeni u VIP '></td>";
                      
                 }
					echo "</tr></table></form>";
                 echo "</br>";
				}else {
                    echo "<center><font size='6px'><b>Ne postoji ni jedan korisnik u sistemu!</b></font></center>";
                  } 
				 ?>
            </div>
        </div>
        <?php require("footer.php") ?>
    
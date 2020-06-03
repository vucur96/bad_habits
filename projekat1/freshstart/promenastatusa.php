<?php
session_start();
require("konekcija.php");

if (isset($_POST['Promeni u VIP'])){
    $upit = "UPDATE korisnik SET VIP='".$_POST['true']."' ";
    $rez = mysqli_query($konekcija, $upit) or die("Greska pri promeni statusa!".mysqli_error($konekcija));
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Promena statusa</title>  
    </head>
    
    <body>
        <div id="header">
       <?php require('header_adm.php'); ?> 
        </div>
        <div id="menu">
            <center>
			<?php
                $q = "SELECT * FROM korisnik WHERE tip='".$_POST['2']."'";
                $r = mysqli_query($konekcija, $q) or die("Greska kod upita za uzimanje informacija o korisnicima!" . mysqli_error($konekcija));
                if (mysqli_num_rows($r)> 0){
                   echo "<table border='0px' cellpadding='1px' style='text-align:center;'>
                        <tr>
                            <td width='25%'><b>Korisnicko ime</b></td>
                            <td width='25%'><b>Ime</b></td>
                            <td width='25%'><b>Prezime</b></td>
                            <td width='25%'></td>
                        </tr>";
                while ( $red = mysqli_fetch_array($r)){
                        
                   echo "<tr> <td> ".$red['korisnickoime']." </td> <td> ".$red['ime']."</td> <td>".$red['prezime']." </td>";
				   echo "<td><input type='submit' name='promeniuvip' value=' Promeni u VIP '></td>";
                      
                 }
                 echo "</table>";
				 ?>
            </div>
        </div>
        <?php require('footer.php') ?>
    </body>
</html>
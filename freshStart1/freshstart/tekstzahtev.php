<?php
session_start();
require("konekcija.php");
?>


<head>
        <meta charset="UTF-8">
        <title>Tekst zahtev</title>  
 </head>
 
 
<div>
<?php require("header_adm.php"); ?>
</div>


					<div class="col-md-10 col-md-offset-1 animate-box">
						
							<div align="center">
							<?php
							$upit = "SELECT BlogID FROM zahtevblog WHERE naslov = '".$_POST['naslov']."'";
							$rez = mysqli_query($konekcija, $upit) or die("Greska kod tekst zahteva!" . mysqli_error($konekcija));
							
								   echo "<table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>";
								   
								   echo "<tr><td> ";
								   
								   echo "</table>";
							
							?>
							</div>
							
							
					</div>
					
<div>
<?php require("footer.php") ?>
</div>
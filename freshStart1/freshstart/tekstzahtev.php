<?php
session_start();
require("konekcija.php");

if (isset($_POST['prihvati'])){
		
	$upit = "INSERT INTO blog (BlogID,naslov, tekst, KorisnickoIme)
			SELECT BlogID, naslov, tekst,KorisnickoIme FROM zahtevblog
			WHERE BlogID ='".$_POST['id']."'";
			
	$rez = mysqli_query($konekcija, $upit) or die("Greska kod ubacivanja bloga u tabelu!".mysqli_error($konekcija));
	
	$upit = "DELETE FROM zahtevblog WHERE BlogID =  '".$_POST['id']."'";
	
    $rez = mysqli_query($konekcija, $upit) or die("Greska kod delete upita!".mysqli_error($konekcija));
	header("Location:zahtevizablog.php");
}

if (isset($_POST['odbij'])){
    $upit = "DELETE FROM zahtevblog WHERE BlogID = '".$_POST['id']."'";
    $rez = mysqli_query($konekcija, $upit) or die("Greska kod delete upita!".mysqli_error($konekcija));
	header("Location:zahtevizablog.php");
}
?>


<head>
        <meta charset="UTF-8">
        <title>Tekst zahtev</title>  
 </head>
 
 
<?php
    if(!isset($_SESSION['KorisnickoIme'])){
        require('header.php');
    }else{
        require("konekcija.php");
        require('header_adm.php');
        
    }
    ?>
<aside id="colorlib-hero">
<div class="flexslider">
<ul class="slides">
<li style="background-image: url(images/img_bg_2.jpg);">
<div class="overlay"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
<div class="slider-text-inner text-center">
<a href="admin_meni.php"><h1>ADMIN MENI</h1></a>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>

							<div align="center">
							<?php
							if(isset($_GET['naslov'])){
							$upit = "SELECT * FROM zahtevblog WHERE naslov = '".$_GET['naslov']."'";
							$rez = mysqli_query($konekcija, $upit) or die("Greska kod tekst zahteva!" . mysqli_error($konekcija));
							$red = mysqli_fetch_array($rez);
							}
							
							echo "<form name='form_requests' method='POST' action='".$_SERVER['PHP_SELF']."'>
								  <table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
								   
								   <tr><td colspan='2' align='center'><input type='hidden' value='".$red['BlogID']."' name='id' ><font size='5'> ".$red['naslov']."</font></td></tr> 
								   
								   <tr><td colspan='2' align='center'> ".$red['tekst']."</td> </tr>
								   <tr> <td width='50%'> <input type='submit' class='btn btn-cta' name='prihvati' value=' Prihvati '></td><td width='50%'><input type='submit' class='btn btn-primary' name='odbij' value=' Odbij '></td></tr>";
								   
						    echo "</table></form></br></br>";
							
							?>
							</div>
							
							
		
					
<div>
<?php require("footer.php") ?>
</div>

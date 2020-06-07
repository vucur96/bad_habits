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
    
    
        <div id="header">
       <?php require("header_adm.php"); ?> 
        </div>
		
        <div id="menu">
            <div align="center">

			<?php
                $upit = "SELECT * FROM korisnik WHERE tip=3 AND VIP IS NULL";
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
                 
				}else {
                    echo "<center><font size='6px'><b>Ne postoji ni jedan korisnik u sistemu!</b></font></center>";
                  } 
				 ?>
            </div>
        </div>
        <?php require("footer.php") ?>
    

 <head>
	
        <meta charset="UTF-8">
        <title>Promena statusa</title>
        	
    </head>
    <aside id="colorlib-hero">
<div class="flexslider">
<ul class="slides">
<li style="background-image: url('/New folder/images/img_bg_2.jpg');">
<div class="overlay"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
<div class="slider-text-inner text-center">
<a href="<?php echo site_url('Admin/admin_meni') ?>"><h1>ADMIN MENI</h1></a>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>
    
   
             <div align="center">
  
  	<form name='form_status' method="post" action="<?= site_url("Admin/promenastatusa") ?>">
  <?php
            if($statusi)  {
                echo   "<table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                            <td width='25%'><b>Korisnicko ime</b></td>
                            <td width='25%'><b>Ime</b></td>
                            <td width='25%'><b>Prezime</b></td>
                            <td width='25%'></td>
                        </tr>";
                        
             foreach ($statusi as $korisnik) {
            echo "<tr><td>{$korisnik->KorisnickoIme}</td><td>{$korisnik->ime}</td><td>{$korisnik->prezime}</td>";
            echo "<td><input type='submit' class='btn btn-primary' name='promeni' value=' Promeni u VIP'></td></tr>";
            
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
  

	



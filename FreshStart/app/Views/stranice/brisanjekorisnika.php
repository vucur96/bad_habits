<head>
        <meta charset="UTF-8">
        <title>Brisanje korisnika</title>  
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
                 
            
  <?php 
                if($korisnici){
  
                        echo "<form name='form_requests'   method='POST' action='Admin/obrisi/'>
            
                        <table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                            <td width='20%'><b>Korisnicko ime</b></td>
                            <td width='20%'><b>Ime</b></td>
                            <td width='20%'><b>Prezime</b></td>
                            <td width='20%'><b>Tip</b></td>
                            <td width='20%'></td>
                        </tr>";
                     
            foreach ($korisnici as $korisnik) {
           echo "<tr><td>{$korisnik->KorisnickoIme}</td><td>{$korisnik->ime}</td><td>{$korisnik->prezime}</td><td>{$korisnik->tip}</td>
            <td><input type='submit'  class='btn btn-primary'   name='obrisi' value='Obrisi' ></td></tr>";
            }
            echo "</table></form>";
            
        }
           
        else {
                        echo "</br></br></br>";
                        echo "<center><font size='6px'><b>Ne postoji ni jedan korisnik u sistemu!</b></font></center>";
            }
     ?>

        
        </div>

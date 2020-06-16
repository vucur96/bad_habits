<html>
<head>
        <meta charset="UTF-8">
        <title>Zahtevi za blog</title>  
</head>
<body>
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
    
    
        <div id="colorlib-about">
<div class="container">
    
        <div align="center">

            <form name='form_requests'  action="<?php echo site_url("Admin/blogPrihvatiOdbi") ?>"  method="POST">
               
  <?php
                    
                     if($zahteviBlog){
                          echo   "<table border='0px'  style='width:70%;text-align:center;'>
                              <tr>
                              <td width='50%'><b> Naslov </b></td>
                              <td width='50%'><b> Autor </b></td>
                              </tr>";
                       
                     
                    foreach ($zahteviBlog as $zahtevblog) {
                        echo "<tr><td>".anchor("Admin/tekstzahtev/{$zahtevblog->BlogID}", "$zahtevblog->naslov")."</td><td>{$zahtevblog->KorisnickoIme}</td></tr>";
                    }
                    
            echo "</table>";
}
    else {
        echo "</br></br></br>";
                      echo "<font face:'Gill' size='6'><b>Nema zahteva za blog.</b></font>";
    }
    
 ?>
                
            </form>
        </div>
    </div>
        </div>
</body>
</html>
                 
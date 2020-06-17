
<script>
    var parametri=[];
</script>
<script src="<?php echo site_url("/New folder/js/zahtevikorisnika.js"); ?>"></script> 
<head>
	
        <meta charset="UTF-8">
        <title>Zahtevi</title>
        	
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
  
             $i=0;        
            if($zahtevKor){
                        echo "<h2>Zahtevi korisnika</h2>";
                        
                        echo   "<table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                            <td width='25%'><b>Ime</b></td>
                            <td width='25%'><b>Prezime</b></td>
                            <td width='25%'></td>
                            <td width='25%'></td>
                        </tr>";
                     
            foreach ($zahtevKor as $zahtevkorisnik) {
                echo "<script>parametri[{$i}]={$zahtevkorisnik->KorisnickoIme};</script>";
            echo "<tr><td>{$zahtevkorisnik->ime}</td><td>{$zahtevkorisnik->prezime}</td>";
            echo "<td><input type='submit'  class='btn btn-cta'  name='prihvati' data-index={$i} value='Prihvati' ></td><td><input type='submit' class='btn btn-primary' name='odbij' data-index={$i} value=' Odbij ' ></td></tr>";
            $i++;
            }
            echo "</table></form>";
                                    echo "</br></br></br>";
            
        }
            else {
                        echo "</br></br></br>";
                        echo "<font face:'Gill' size='6'><b>Nema zahteva za korisnika.</b></font>";
 
            }
  
            
            $k=0; 
            if($zahtevTre){
                        echo "<h2>Zahtevi trenera</h2>";
                        echo   "<table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                            <td width='20%'><b>Ime</b></td>
                            <td width='20%'><b>Prezime</b></td>
                            <td width='20%'><b>Kurs</b></td>
                            <td width='20%'></td>
                            <td width='20%'></td>
                        </tr>";
                     
                        foreach ($zahtevTre as $zahtevkorisnik) {
                          echo "<script>parametri[{$k}]={$zahtevkorisnik->KorisnickoIme};</script>";
                         echo "<tr><td>{$zahtevkorisnik->ime}</td><td>{$zahtevkorisnik->prezime}</td><td>{$zahtevkorisnik->kurs}</td>";
                         echo "<td><input type='submit' class='btn btn-cta' name='prihvati' data-index={$k} value=' Prihvati '></td><td><input type='submit' class='btn btn-primary' name='odbij' data-index={$k} value=' Odbij '></td></tr>";
                        $k++;
                         }
                        echo "</table></form>";
                                                echo "</br></br></br>";
                        
           }
            else {
                        echo "</br></br></br>";
                        echo "<font face:'Gill' size='6'><b>Nema zahteva za trenera.</b></font>";
  
            }
  
            
              $m=0; 
           if($zahtevSpo){
                        echo "<h2>Zahtevi sponzora</h2>";

                        echo   "<table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                        <tr>
                           <td width='25%'><b>Ime firme</b></td>
                            <td width='25%'><b>Opis delatnosti</b></td>
                            <td width='25%'></td>
                            <td width='25%'></td>
                        </tr>";
                     
                       foreach ($zahtevSpo as $zahtevkorisnik) {
                        echo "<script>parametri[{$m}]={$zahtevkorisnik->KorisnickoIme};</script>";
                       echo "<tr><td>{$zahtevkorisnik->imefirme}</td><td>{$zahtevkorisnik->opisdel}</td>";
                      echo "<td><input type='submit' class='btn btn-cta' name='prihvati' data-index={$m}  value=' Prihvati '></td><td><input type='submit' class='btn btn-primary' name='odbij' data-index={$m} value=' Odbij '></td></tr>";
                    $m++;
                      }  
                    echo "</table></form>";
           }
            else {
                        echo "</br></br></br>";
                        echo "<font face:'Gill' size='6'><b>Nema zahteva za sponzora.</b></font>";
  
            }
  
            
?>
              
       
  </div>
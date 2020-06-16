<head>
        <meta charset="UTF-8">
        <title>Tekst zahtev</title>  
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
 
 
        <div id="colorlib-about">
<div class="container">

 <body>
     
    <div align="center">
       <?php echo "<form name='form_requests' method='POST' action='prihvatiOdbijBlog/{$blog->BlogID}'>
            <table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                <tr><td colspan='2' align='center'><font size='5'> $blog->naslov</font></td></tr> 
		<tr><td colspan='2' align='center'>$blog->tekst</td> </tr>
                <tr> <td width='50%'> <input type='submit' class='btn btn-cta' name='prihvati' value=' Prihvati '></td><td width='50%'><input type='submit' class='btn btn-primary' name='odbij' value=' Odbij '></td></tr>";
            echo "</table></form>";
       ?>
    </div>
     
</div>
        </div>
 </body>
 
 
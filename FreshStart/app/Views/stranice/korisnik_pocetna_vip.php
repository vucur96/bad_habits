<html>
<head>
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
<h1>Odabir pogodnosti</h1>
<h2><span><a href="<?php echo site_url('Korisnik/index') ?>">Početna</a> | Odabir pogodnosti</span></h2>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>
    <div class="col-md-10 col-md-offset-1 animate-box">
        <h2>Odabir pogodnosti za tekući mesec</h2>

        <form name='vip' action="<?php echo site_url('Korisnik/proveriVip') ?>" method="POST">			
            <input type='checkbox' name='pogodnosti' value='masaza'>Besplatna masaža<br>
            <input type='checkbox' name='pogodnosti' value='trening'>Besplatan trening<br>
            <input type='checkbox' name='pogodnosti' value='popust'>Popust na mesecnu clanarinu<br>
           <?php if(!empty($errors['pogodnosti'])){ echo $errors['pogodnosti']; }?>

            <div class="form-group">
            <input type="submit" value="Nastavi" name ="nastavi" class="btn btn-primary">
            </div>
        </form>		
    </div>

</body>
</html>

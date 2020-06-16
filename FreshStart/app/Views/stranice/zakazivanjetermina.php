<html>
<head>
<title> Zakazivanje termina </title>
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
<h1>Zakazivanje termina</h1>
<h2><span><a href="<?php echo site_url('Trener/index')?>">Pocetna</a></span></h2>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>



        <div class="col-md-10 col-md-offset-1 animate-box">
		<input type='hidden' name="idtemina" value="<?= set_value('TerID')?>">


        <form name='formatermin' action="<?= site_url('Trener/proveriTermin') ?>" method="POST">
            <div class="row form-group">
                <div class="col-md-4">
<input type="date" name="dan" class="form-control" value="<?= set_value('dan')?>" placeholder="Dana kada se odrzava trening:" min="<?php echo date("Y-m-d"); ?>">
                    <?php if(!empty($errors['dan'])){ echo $errors['dan']; }?>
                </div>
            </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <input type="time" name="pocetak" class="form-control" value="<?= set_value('pocetak')?>" placeholder="Pocetak termina">
                            <?php if(!empty($errors['pocetak'])){ echo $errors['pocetak']; }?>
                    </div>
                    </div>
                    <div class="row form-group">
                    <div class="col-md-4">
                        <input type="time" name="kraj" class="form-control" value="<?= set_value('kraj')?>" placeholder="Kraj termina">
                        <?php if(!empty($errors['kraj'])){ echo $errors['kraj']; }?>
                    </div>
                    </div>
                    <div class="row form-group">
                    <div class="col-md-4">
<input type="text" name="kurs" class="form-control" value="<?= set_value('kurs')?>" placeholder="Kurs koji cete drzati:">
                    <?php if(!empty($errors['kurs'])){ echo $errors['kurs']; }?>
                    </div>
                    </div>

								
								
								<input type="submit" value="Objavi" name="objavi" class="btn btn-primary" > 
								 
								
								</div>
                
							
					

</body>
</html>
		

<html>
<head>
</head>
<body>

	<aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(images/img_bg_2.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h1>Promena lozinke</h1>
                                        <h2><span><a href="<?php echo site_url('Gost/index')?>">Početna</a> | Promena lozinke</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
	</aside>
	
	<div class="col-md-10 col-md-offset-1 animate-box">

            <br>
            <h2>PROMENA LOZINKE</h2>
            <?php if(isset($poruka)){ echo "<font color='red'>$poruka</font><br>";}?>
            <form name='mojaforma' action="<?php echo site_url('Gost/proveriPromenuLozinke') ?>" method="POST">

                <div class="row form-group">
                    <div class="col-md-6">
                        <input type="text" name="korIme" class="form-control" value="<?= set_value('korIme')?>" placeholder="Korisnicko ime">
                         <?php if(!empty($errors['korIme'])){ echo $errors['korIme']; }?>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6">
                        <input type="password" name="staraLoz" class="form-control" placeholder="Stara lozinka">
                         <?php if(!empty($errors['staraLoz'])){ echo $errors['staraLoz']; }?>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6">
                        <input type="password" name="novaLoz" class="form-control" placeholder="Nova lozinka">
                         <?php if(!empty($errors['novaLoz'])){ echo $errors['novaLoz']; }?>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6">
                        <input type="password" name="potvrda" class="form-control" placeholder="Potvrda nove lozinke">
                         <?php if(!empty($errors['potvrda'])){ echo $errors['potvrda']; }?>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Promeni" name ="Promeni" class="btn btn-primary">
                </div>
            </form>		
        </div>
    </div>
    </div>
		
</body>
</html>


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
                                        <h1>Registracija</h1>
                                        <h2><span><a href="<?php echo site_url('Gost/index')?>">Početna</a> | Registracija</span></h2>
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
	<h2>REGISTRACIJA</h2>

	<?php if(isset($poruka)){ echo "<font color='red'>$poruka</font><br>";}?>
	<form name='mojaforma' action="<?php echo site_url('Gost/proveriRegistraciju')?>" method="POST">
            <div class="row form-group">
                <div class="col-md-6">
                    <input type="text" name="korisnickoIme" class="form-control" value="<?= set_value('korisnickoIme')?>" placeholder="Korisnicko ime" >
                    <?php if(!empty($errors['korisnickoIme'])){ echo $errors['korisnickoIme']; }?>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <input type="email" name="Email" class="form-control" value="<?= set_value('Email')?>" placeholder="Email adresa">
                    <?php if(!empty($errors['Email'])){ echo $errors['Email']; }?>
                </div>
            </div>
								
            <div class="row form-group">
                <div class="col-md-6">
                    <input type="password" name="lozinka" class="form-control" placeholder="Lozinka">
                    <?php if(!empty($errors['lozinka'])){ echo $errors['lozinka']; }?>
                </div>
            </div>
		
            <div class="row form-group">
                <div class="col-md-6">
                    <input type="password" name="PonovoLoz" class="form-control" placeholder="Ponovljena lozinka">
                    <?php if(!empty($errors['PonovoLoz'])){ echo $errors['PonovoLoz']; }?>
                </div>
            </div>
		
            <div class="row form-group">
                    <input type='radio' id="sponzor" name='tip' value='1' > <label for="sponzor">Sponzor</label>
                    <input type='radio' id="trener" name='tip' value='2' > <label for="trener">Trener</label>

                    <input type='radio' id="korisnik" name='tip' value='3' > <label for="korisnik">Korisinik</label>
                    <?php if(!empty($errors['tip'])){ echo $errors['tip']; }?>
            </div>
					
            <div class="form-group">
                <input type="submit" value="Nastavi" name ="nastavi" class="btn btn-primary">
            </div>
		
	</form>	


</body>
</html>

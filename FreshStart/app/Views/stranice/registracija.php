
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

	
	<form name='mojaforma' action="<?php echo site_url('Gost/proveriRegistraciju')?>" method="POST">
            <div class="row form-group">
                <div class="col-md-6">
                    <input type="text" name="korisnickoIme" class="form-control" placeholder="Korisnicko ime" >
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <input type="email" name="Email" class="form-control" placeholder="Your email address">
                </div>
            </div>
								
            <div class="row form-group">
                <div class="col-md-6">
                    <input type="password" name="lozinka" class="form-control" placeholder="Lozinka">
                </div>
            </div>
		
            <div class="row form-group">
                <div class="col-md-6">
                    <input type="password" name="PonovoLoz" class="form-control" placeholder="Ponovljena lozinka">
                </div>
            </div>
		
            <div class="row form-group">
                    <input type='radio' id="sponzor" name='tip' value='1' > <label for="sponzor">Sponzor</label>
                    <input type='radio' id="trener" name='tip' value='2' > <label for="trener">Trener</label>

                    <input type='radio' id="korisnik" name='tip' value='3' > <label for="korisnik">Korisinik</label>
            </div>
					
            <div class="form-group">
                <input type="submit" value="Nastavi" name ="nastavi" class="btn btn-primary">
            </div>
		
	</form>	


</body>
</html>

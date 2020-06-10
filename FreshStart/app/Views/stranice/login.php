
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
                                    <h1>Prijava</h1>
                                    <h2><span><a href="<?php echo site_url('Gost/index')?>">Početna</a> | Prijava</span></h2>
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
        <h2>PRIJAVA</h2>

        <form name="login" action="<?php echo site_url('Gost/proveriPrijavu') ?>" method="POST">
            <div class="row form-group">
                <div class="col-md-6">
                    <input type="text" name="korIme" class="form-control" placeholder="Korisnicko ime">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <input type="password" name="lozinka" class="form-control" placeholder="Lozinka">
                </div>
            </div>

            <div class="form-group">
                <input type="submit" value="Prijavi se" name ="login" class="btn btn-primary">
            </div>

            <p>Ako ste novi korisnik nastavite sa <a href="<?php echo site_url('Gost/registracija')?>">Registracijom</a></p>
	</form>	
    </div>
</div>
</div>
</div>
		
</body>		
</html>

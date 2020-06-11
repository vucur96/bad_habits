
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
                                    <h1>Registracija sponzora</h1>
                                    <h2><span><a href="<?php echo site_url('Gost/index')?>">Početna</a> | Registracija sponzora</span></h2>
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
        <h2>REGISTRACIJA SPONZORA </h2>

        <form name='registracijaspon' action="<?php echo site_url('Gost/proveriRegSponzor')?>" method="POST">
	
            <div class="row form-group">
                <div class="col-md-6">
                    <input type="text" name="imefirme" class="form-control" value="<?= set_value('imefirme')?>"placeholder="Ime Vaše firme" >
                </div>
            </div>
            
            <div class="row form-group">
                <div>
                    <p> Opis delatnosti firme: </p>
                    <textarea name="opisdel" rows="5" value="<?= set_value('opisdel')?>"cols="50"></textarea>
                </div>
            </div>

            <div class="row form-group">
                <p>Vrsta reklame koju želite:</p>
                <p> <input type='checkbox' name='vrstarek' value='proizvod'>Reklamiranje Vašeg proizovda u teretani</p>
                <p> <input type='checkbox' name='vrstarek' value='poster'>Reklamiranje Vaše firme u vidu postera</p>
                <p> <input type='checkbox' name='vrstarek' value='flajer'>Reklamiranje Vaših flajera</p>
            </div>
            
            <div class="form-group">
                    <input type="submit" value="Registruj me" name ="registruj" class="btn btn-primary">
            </div>
            
	</form>		
    </div>

</body>
</html>

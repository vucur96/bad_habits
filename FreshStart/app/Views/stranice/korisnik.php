
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
                                    <h1>Registracija korisnika</h1>
                                    <h2><span><a href="<?php echo site_url('Gost/index')?>">Početna</a> | Registracija korisnika</span></h2>
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
			 
    <div class="col-md-10 col-md-offset-1 animate-box">
        
        <br>
        <h2>REGISTRACIJA KORISNIKA</h2>

        <form name="registracijakor" action="<?php echo site_url('Gost/proveriRegKorisnik')?>" method="POST">

            <div class="row form-group">
                <div class="col-md-6">
                    <input type="text" name="ime" class="form-control" value="<?= set_value('ime')?>" placeholder="Vaše ime" >
                    <?php if(!empty($errors['ime'])){ echo $errors['ime']; }?>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <input type="text" name="prezime" class="form-control" value="<?= set_value('prezime')?>" placeholder="Vaše prezime" >
                    <?php if(!empty($errors['prezime'])){ echo $errors['prezime']; }?>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <input type="date" name="datumrodj" class="form-control" placeholder="Datum rodjenja" min="1930-01-01">
                    <?php if(!empty($errors['datumrodj'])){ echo $errors['datumrodj']; }?>
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-md-4">
                    <input type="number" name="visina" class="form-control" value="<?= set_value('visina')?>" placeholder="Vaša visina(u cm)" min="100" max="250">
                    <?php if(!empty($errors['visina'])){ echo $errors['visina']; }?>
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-md-4">
                    <input type="number" name="tezina" class="form-control" value="<?= set_value('tezina')?>" placeholder="Vaša težina(u kg)" min="30" max="500">
                    <?php if(!empty($errors['tezina'])){ echo $errors['tezina']; }?>
                </div>
            </div>
            
            <div class="row form-group">
                <div>
                    <p> Vaš cilj: </p>
                    <textarea name="cilj" rows="5" cols="35" value="<?= set_value('cilj')?>"></textarea>
                    <?php if(!empty($errors['cilj'])){ echo $errors['cilj']; }?>
                </div>
            </div>


            <div class="form-group">
                    <input type="submit" value="Registruj me" name ="registruj" class="btn btn-primary">
            </div>
        </form>	
    </div>
</div>
    </div>
</body>
</html>

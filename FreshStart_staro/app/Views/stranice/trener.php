
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
                                    <h1>Registracija trenera</h1>
                                    <h2><span><a href="<?php echo site_url('Gost/index')?>">Početna</a> | Registracija trenera</span></h2>
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
	<h2>REGISTRACIJA TRENERA</h2>

        <form name='registracijatren' action="<?php echo site_url('Gost/proveriRegTrener')?>" method="POST">

            <div class="row form-group">
                <div class="col-md-6">
                    <input type="text" name="ime" class="form-control" value="<?= set_value('ime')?>" placeholder="Vaše ime" >
                    <?php if(!empty($errors['ime'])){ echo $errors['ime']; }?>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <input type="text" name="prezime" class="form-control" value="<?= set_value('prezime')?>" placeholder="Vaše prezime">
                    <?php if(!empty($errors['prezime'])){ echo $errors['prezime']; }?>
                </div>
            </div>
                            
            <div class="row form-group">
                <div class="col-md-6">
                    <input type="date" name="datumrodj" class="form-control" placeholder="Datum rodjenja" min="1930-01-01" max="2003-01-01">
                    <?php if(!empty($errors['datumrodj'])){ echo $errors['datumrodj']; }?>
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-md-6">
                    <input type="text" name="kurs" class="form-control" value="<?= set_value('kurs')?>" placeholder="Kursevi za koji ste specijalizovani">
                    <?php if(!empty($errors['kurs'])){ echo $errors['kurs']; }?>
                </div>
            </div>
                          
            <div class="form-group">
                <div class="form-group">
                    <input type="submit" value="Registruj me" name ="registruj" class="btn btn-primary">
                </div>	
            </div>
            
        </form>
        
    </div>
</body>
</html>


<html>
<head>
    <meta charset="UTF-8">
<title> Pisanje bloga </title>
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
<h1>Pisanje BLOGA</h1>
<h2><span><a href="<?php echo site_url('Trener/index')?>">Pocetna</a> | Pisanje bloga</span></h2>
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
		<input type='hidden' name="idbloga" value="<?= set_value('BlogID')?>">


            <form name='formablogtr' action="<?= site_url('Trener/proveriBlog') ?>" method="POST">
                <br>
                <p class="formfield">
                 <label for="textarea"> Naslov </label>

               <textarea  name="naslov" rows="1" cols="104" value="<?= set_value('naslov')?>"></textarea>
				 <?php if(!empty($errors['naslov'])){ echo $errors['naslov']; }?>
						
						<br><br>
						


	<textarea id="tekst" name="tekstbloga" rows="15" cols="112" value="<?= set_value('tekst')?>"> </textarea>
                           <?php if(!empty($errors['tekstbloga'])){ echo $errors['tekstbloga']; }?>
												
	</p>
	<p>
								
	<button class="btn btn-cta"> Dodaj sliku </button>
								
	<input type="submit" value="Objavi" name="objavi" class="btn btn-primary1" > 
								 
	</p>
</div>
  	
</div>
        </div>
                
</body>
</html>
		

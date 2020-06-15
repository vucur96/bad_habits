<head>
        <meta charset="UTF-8">
        <title>Admin blog</title>  
 </head>
    
 <div class="col-md-10 col-md-offset-1 animate-box">
						  
                <input type='hidden' name='idbloga' value="<?php echo 'BlogID'; ?>">
                
                <form name='mojaforma' action="<?= site_url('Admin/proveriBlog') ?>" method="POST">
						
                            <br>
                            <p class="formfield">
                            <label for="textarea"> Naslov </label>    
                            <textarea  name="naslov" rows="1" cols="92" value="<?= set_value('naslov')?>"></textarea>
		<?php if(!empty($errors['naslov'])){ echo $errors['naslov']; }?>
						
                            <input type="button" value="Zahtevi" class="btn btn-cta1" onclick="window.location.href='Admin/zahtevizablog'">
                            <br><br>
                            <textarea id="tekst" name="tekstbloga" rows="15" cols="100" value="<?= set_value('tekst')?>" required> </textarea>
                             <?php if(!empty($errors['tekst'])){ echo $errors['tekst']; }?>
                            
                            </p>
                            <p>
								
                            <button class="btn btn-cta"> Dodaj sliku </button>
								
                            <input type="submit" value="Objavi" name="objavi" class="btn btn-primary1" > 
								 
                            </p>
                            </div>
                
	



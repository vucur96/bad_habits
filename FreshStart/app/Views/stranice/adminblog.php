<head>
        <meta charset="UTF-8">
        <title>Admin blog</title>  
 </head>
    
 <div class="col-md-10 col-md-offset-1 animate-box">
						  
                <input type='hidden' name='idbloga' value="<?php echo 'BlogID'; ?>">
                
                    <form name='mojaforma' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
						
                            <br>
                            <p class="formfield">
                            <label for="textarea"> Naslov </label>    
                            <textarea  name="naslov" rows="1" cols="92"></textarea>
				
						
                            <input type="button" value="Zahtevi" class="btn btn-cta1" onclick="window.location.href='zahtevizablog.php'">;
                            <br><br>
                            <textarea id="tekst" name="tekstbloga" rows="15" cols="100" required> </textarea>

                            </p>
                            <p>
								
                            <button class="btn btn-cta"> Dodaj sliku </button>
								
                            <input type="submit" value="Objavi" name="objavi" class="btn btn-primary1" > 
								 
                            </p>
                            </div>
                
	</form>		
 </div>


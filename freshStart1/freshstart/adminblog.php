<?php
session_start();
require("konekcija.php");
?>

<head>
        <meta charset="UTF-8">
        <title>Admin blog</title>  
    </head>
	
	<?php
    if(!isset($_SESSION['KorisnickoIme'])){
        require('header.php');
    }else{
        require("konekcija.php");
        require('header_adm.php');
        
    }
    ?>
        
		<div class="col-md-10 col-md-offset-1 animate-box">
						
						<form name='mojaforma' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
						
						<br>
						<p class="formfield">
						<label for="textarea"> Naslov </label> 
						<?php
						if(isset($_POST['objavi'])){
							$naslov = $_POST['naslov'];
							$tekst = $_POST['tekstbloga'];
							
							
							if($naslov != '') {
								if($tekst != '') {
									$upit = "INSERT INTO blog (naslov,tekst) VALUES ('".$naslov."' , '".$tekst."')";
									$rez = mysqli_query($konekcija, $upit)
											or die("Greska kod upita za upis u bazu!" . mysqli_error($konekcija));
								}else {
									echo "<center><font size='4px' color='#e32319'><b>Niste uneli tekst!</b></font></center>";

							} 
							}
							else{
							
								echo "<center><font size='4px' color='#e32319'><b>Niste uneli naslov!</b></font></center>";

							}
						}
							
						?>
							
							
						
						<textarea  name="naslov" rows="1" cols="92" class="kontrola"></textarea>
				
						
						<input type="button" value="Zahtevi" class="btn btn-cta1" onclick="window.location.href='zahtevizablog.php'">;
						<br><br>
						


						<textarea class="kontrola" id="tekst" name="tekstbloga" rows="15" cols="100"> </textarea>		

												
						</p>
								<p>
								
								<button class="btn btn-cta"> Dodaj sliku </button>
								
								<input type="submit" value="Objavi" name="objavi" class="btn btn-primary1" > 
								 
								</p>
								</div>
                
						</form>		
					</div>
				
		
		
		
		
		 <?php 
            require("footer.php");
        ?>
		
		

  
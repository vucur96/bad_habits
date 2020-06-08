<?php
	session_start();
?>
<html>

<head>
        <meta charset="UTF-8">
        <title>Admin blog</title>  
    </head>
	<body>
	<?php
    if(!isset($_SESSION['KorisnickoIme'])){
        require("header.php");
    }else{
        require("konekcija.php");
        require("header_adm.php");
        
    }
    ?>

<aside id="colorlib-hero">
<div class="flexslider">
<ul class="slides">
<li style="background-image: url(images/img_bg_2.jpg);">
<div class="overlay"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
<div class="slider-text-inner text-center">
<a href="admin_meni.php"><h1>ADMIN MENI</h1></a>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>
        
		<div class="col-md-10 col-md-offset-1 animate-box">
						
						
                    
                    <input type='hidden' name='idbloga' value="<?php echo 'BlogID'; ?>">



							
						<form name='mojaforma' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
						
						<br>
						<p class="formfield">
						<label for="textarea"> Naslov </label> 
	<?php
    if(isset($_POST['objavi'])){
        $korisnik=$_SESSION['KorisnickoIme'];
        $naslov = $_POST['naslov'];
        $tekst = $_POST['tekstbloga'];
        
        
        if($naslov != '') {
            if($tekst != ' ') {
                $upit = "INSERT INTO blog (naslov,tekst,KorisnickoIme) VALUES ('".$naslov."', '".$tekst."','".$korisnik."')";
                $rez = mysqli_query($konekcija, $upit)
                or die("Greska kod upita za upis u bazu!" . mysqli_error($konekcija));
             
            }else {
                echo "<center><font size='4px' color='#e32319'><b>Niste uneli tekst!</b></font></center>";
                
            }
        }
        else{
            
            echo "<center><font size='4px' color='#e32319'><b>Niste uneli naslov!</b></font></center>";
            
        }
        mysqli_close($konekcija);

    }
    
    ?>
						
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
				
		
		
		
		
		 <?php 
            require("footer.php");
        ?>
	</body>
</html>



  

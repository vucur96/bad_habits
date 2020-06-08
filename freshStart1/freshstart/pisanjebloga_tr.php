<?php
	session_start();
    require("konekcija.php");
?>
<html>
<head>
<title> Pisanje bloga </title>
</head>
<body>
<?php
    if(!isset($_SESSION['KorisnickoIme'])){
        require('header.php');
    }else{
        $upit2 = "SELECT * FROM korisnik WHERE KorisnickoIme='".$_SESSION['KorisnickoIme']."'";
        $rezultat2 = mysqli_query($konekcija, $upit2) or die("Greska kod upita za proveru šifre!" . mysqli_error($konekcija));
        if (mysqli_num_rows($rezultat2) == 1){
            $red = mysqli_fetch_array($rezultat2);
            $tip = $red['tip'];
            
            if($tip==1){
                require('header_spon.php');
            }else{
                if ($tip==2){
                    require('header_tren.php');
                }else{
                    require('header_kor.php');
                }
            }
        }else{
            require('header.php');
        }
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
<h1>Pisanje BLOGA</h1>
<h2><span><a href="index.php">Pocetna</a></span></h2>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>



        <div class="col-md-10 col-md-offset-1 animate-box">
		<input type='hidden' name="idbloga" value="<?php echo 'BlogID'; ?>">


            <form name='formablogtr' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <br>
                <p class="formfield">
                 <label for="textarea"> Naslov </label>
	<?php
    if(isset($_POST['objavi'])){
        $korisnik=$_SESSION['KorisnickoIme'];
        $nas=$_POST['naslov'];
        $tekstb=$_POST['tekstbloga'];
        
        if($nas != ''){
            if($tekstb != ' '){
                $upit = "INSERT INTO zahtevblog (naslov, tekst, KorisnickoIme)
                VALUES ('".$nas."', '".$tekstb."','".$korisnik."')";
                $rezultat = mysqli_query($konekcija, $upit)
                or die("Greska kod upita za upis u bazu!" . mysqli_error($konekcija));
                echo "<script> location.href='index.php'; </script>";
                    
                
            }else{
                echo "<center><font size='4px' color='#e32319'><b>Niste uneli tekst!</b></font></center>";
            }
        }else{
            echo "<center><font size='4px' color='#e32319'><b>Niste uneli naslov!</b></font></center>";
        }
        mysqli_close($konekcija);
    }
    ?>

               <textarea  name="naslov" rows="1" cols="92"></textarea>
				
						
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
                

<?php require('footer.php') ?>
</body>
</html>
		

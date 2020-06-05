<?php
    session_start();
    ?>
<html>
<head>
</head>

<body>
<?php require('header_kor.php'); ?>
<aside id="colorlib-hero">
<div class="flexslider">
<ul class="slides">
<li style="background-image: url(images/img_bg_2.jpg);">
<div class="overlay"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
<div class="slider-text-inner text-center">
<h1>Odabir pogodnosti</h1>
<h2><span><a href="index_ulogovan.html">Početna</a> | Odabir pogodnosti</span></h2>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Odabir pogodnosti za tekući mesec
                        
                        </h2>
<?php
    if(isset($_SESSION['KorisnickoIme'])){
        $korisnik=$_SESSION['KorisnickoIme'];
    }
    if(isset($_POST['nastavi'])){
        $pog= $_POST['pogo'];
        require("konekcija.php");
        
        if($pog!=''){
      
            $upit1 = "SELECT * FROM korisnik WHERE KorisnickoIme='".$korisnik."'";
            $rezultat1 = mysqli_query($konekcija, $upit1)
            or die("Greska kod upita koji proverava da li uneto korisničko ime postoji u bazi!" . mysqli_error($konekcija));
            if (mysqli_num_rows($rezultat1) == 1) {
                $red = mysqli_fetch_array($rezultat1);
                $pogodnost = $red['pogodnosti'];
				    if($pogodnost != 'masaza' AND $pogodnost != 'trening' AND $pogodnost != 'popust')
				{	
					
						$upit = "UPDATE korisnik SET pogodnosti='".$pog."'
						WHERE KorisnickoIme='".$korisnik."'";
						$rezultat = mysqli_query($konekcija, $upit)
						or die("Greska kod upita za upis u bazu!" . mysqli_error($konekcija));
						echo "<script> location.href='index.php'; </script>";
					
					}
                }else{
                    echo "<script> location.href='index.php'; </script>";
                }
        }else{
            echo "<center><font size='4px' color='#e32319'><b>Niste uneli pogodnost!</b></font></center>";
        }
        mysqli_close($konekcija);
    }
    ?>
						<form name='vip' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
						
							<input type='checkbox' name='pogo' value='masaza'>
							Besplatna masaža<br>
                            <input type='checkbox' name='pogo' value='trening'>
                            Besplatan trening<br>
                            <input type='checkbox' name='pogo' value='popust'>
                           Popust na mesecnu clanarinu<br>
                            
                        <div class="form-group">
                        <input type="submit" value="Nastavi" name ="nastavi" class="btn btn-primary">
                        </div>
							
						</form>		
					</div>

		   <?php require('footer.php') ?>

</body>
</html>

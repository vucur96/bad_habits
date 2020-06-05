<?php
	session_start();
    
?>
<html>
<head>
<title></title>
</head>
<body>


<?php
    if(!isset($_SESSION['KorisnickoIme'])){
    require('header.php');
    }else{
             require("konekcija.php");
        require('header_adm.php');
       
    }
?>
    <h2> Dodavanje teksta kao admin</h2>
<?php
    if(isset($_POST['objavi'])){
        $korisnik=$_SESSION['KorisnickoIme'];
        $nas=$_POST['naslov'];
        $tekstb=$_POST['tekstbloga'];
        
        if($nas != ''){
            if($tekstb != ''){
                $upit = "INSERT INTO blog (naslov, tekst, KorisnickoIme)
                VALUES ('".$nas."', '".$tekstb."','".$korisnik."')";
                $rezultat = mysqli_query($konekcija, $upit)
                or die("Greska kod upita za upis u bazu!" . mysqli_error($konekcija));
                if (mysqli_num_rows($rezultat) == 1) {
                    echo "<script> location.href='admin_meni.php'; </script>";
                    
                }//else{
                //echo "<center><font size='4px' color='#e32319'><b>Greska kod unosa u zatevblog!</b></font></center>";
                //}
            }else{
                echo "<center><font size='4px' color='#e32319'><b>Niste uneli tekst!</b></font></center>";
            }
        }else{
            echo "<center><font size='4px' color='#e32319'><b>Niste uneli naslov!</b></font></center>";
        }
        mysqli_close($konekcija);
    }
    ?>

        <div class="col-md-10 col-md-offset-1 animate-box">

            <form name='formablogadm' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <br>
                <p class="formfield">
                <input type='hidden' name='idbloga' value="<?php echo 'BlogID'; ?>">
                <label for="textarea"> Naslov </label>

                <textarea  name="naslov" rows="1" cols="56"></textarea>
                <textarea id="tekst" name="tekstbloga" rows="15" cols="70"> </textarea>
                </p>
            <p>

                <button class="btn btn-cta"> Dodaj sliku </button>

                <input type="submit" value="Objavi" name ="objavi" class="btn btn-primary">
                <br>
                <br>
            </p>

            <div >
            <a href="zahtevizablog.php">Zahtevi za blog</a>
            </div>

</div>
                </form>
                </div>


<?php require('footer.php') ?>
</body>
</html>
		

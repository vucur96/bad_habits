<?php
require("konekcija.php");
if(!isset($_POST['korisnicko_ime']))
    header("Location:index.php");
?>
<html>
<?php require('header.php'); ?>
<?php
    $upit = "UPDATE INTO zahtevkorisnik(imefirme,opisdel,vrstarek) VALUES ('".$_POST['imefirme']."','".$_POST['opisdel']."','".$_POST['vrstarek'].")";
    $r = mysqli_query($konekcija, $upit) or die("Greska kod ubacivanja korisnika u tabelu".mysqli_error($konekcija));
    echo "<font color='red' size='6px'><b>Vaš zahtev za registraciju je poslat amdinu</b><font>";
    }
    ?>

          <?php require('footer.php') ?>
</html>

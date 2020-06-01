<?php
require("konekcija.php");
if(!isset($_POST['korisnicko_ime']))
    header("Location:index.php");
?>
<html>
<?php require('header.php'); ?>

<?php
    $upit = "UPDATE INTO zahtevkorisnik(ime,prezime,datumrodj,visina,tezina,cilj) VALUES ('".$_POST['ime']."','".$_POST['prezime']."','".$_POST['datumrodj']."','".$_POST['visina']."','".$_POST['tezina']."','".$_POST['cilj'].")";
    $r = mysqli_query($konekcija, $upit) or die("Greska kod ubacivanja korisnika u tabelu".mysqli_error($konekcija));
    echo "<font color='red' size='6px'><b>Vaš zahtev za registraciju je poslat amdinu</b><font>";
    }
    ?>

          <?php require('footer.php') ?>

</html>

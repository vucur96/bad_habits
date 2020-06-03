<?php
    $konekcija = mysqli_connect("localhost:3308","root","root") or die
            ("Greska prilikom konekcije!". mysqli_connect_error());
    
    mysqli_select_db($konekcija,"freshstart") or 
            die ("Greska kod biranja baze podataka!");
    mysqli_set_charset($konekcija, "utf8");
    
   
?>

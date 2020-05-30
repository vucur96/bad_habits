<?php
    $nameErr = $emailErr = $tipErr= "";
    $fname = $email = $tip = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fname"])) {
            $nameErr = "Ime je obavezno!";
        } else {
            $fname = test_input($_POST["fname"]);
        }
        
        if (empty($_POST["email"])) {
            $emailErr = "Email je obavezan";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Nije dobar format email-a";
            }
        }
        
        if (empty($_POST["tip"])) {
            $tipErr = "Tip je obavezan";
        } else {
            $tip = test_input($_POST["tip"]);
        }
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>


<div class="colorlib-loader"></div>

    <div id="page">
    <nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
    <div class="container">
    <div class="row">
    <div class="col-md-2">
    <div id="colorlib-logo"><a href="index.html">FRESH START</a></div>
    </div>
    <div class="col-md-10 text-right menu-1">
        <ul>
        <li><a href="index.html">Početna</a></li>
        <li class="has-dropdown">
            <a href="classes.html">Treninzi</a>
            <ul class="dropdown">
            <li><a href="classes-single.html">Individualni treninzi</a></li>
            <li><a href="cardio.html">Cardio</a></li>
            <li><a href="funkcionalni.html">Funkcionalni</a></li>
            <li><a href="yoga.html">Yoga</a></li>
            <li><a href="aerobic.html">Aerobic</a></li>
            <li><a href="karate.html">Karate</a></li>
            <li><a href="body_pump.html">Body Pump</a></li>
            <li><a href="snaga.html">Snaga</a></li>
            </ul>
            </li>
            <li><a href="schedule.html">Raspored</a></li>
            <li><a href="o_trenerima.html">Treneri</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Kontakt</a></li>
            <li class="btn-cta"><a href="login.html"><span>Prijavi se</span></a></li>
            </ul>
            </div>
            </div>
            </div>
    </div>
</nav>
<aside id="colorlib-hero">
        <div class="flexslider">
        <ul class="slides">
        <li style="background-image: url(images/img_bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
        <div class="slider-text-inner text-center">
        <h1>Registracija</h1>
        <h2><span><a href="index.html">Početna</a> | Registracija</span></h2>
        </div>
        </div>
        </div>
        </div>
        </li>
        </ul>
        </div>
        </aside>
        <div class="col-md-10 col-md-offset-1 animate-box">

        <br>
        <h2>REGISTRACIJA

        </h2>
        <form name='mojaforma' action="<?php echo site_url('Gost/reg');?>" method="POST" >
            <div class="row form-group">
            <div class="col-md-6">
            <!-- <label for="fname">First Name</label> -->
            <input type="text" id="fname" class="form-control" placeholder="Korisnicko ime" required>
            </div>
            </div>

            <div class="row form-group">
            <div class="col-md-6">
            <!-- <label for="email">Email</label> -->
            <input type="text" id="email" class="form-control" placeholder="Your email address"required>
            </div>
            </div>

<div class="row form-group">
<div class="col-md-6">
<!-- <label for="fname">First Name</label> -->
<input type="password" id="password" class="form-control" placeholder="Lozinka"required>
</div>
</div>
<div class="row form-group">
<div class="col-md-6">
<!-- <label for="fname">First Name</label> -->
<input type="password" id="password" class="form-control" placeholder="Ponovljena lozinka"required>
</div>
</div>
<div class="row form-group">
<input type='radio' id="sponzor" name='tip' value="sponzor.html" required> <label for="sponzor">Sponzor</label>
<input type='radio' id="trener" name='tip' value="trener.html" required> <label for="trener">Trener</label>

<input type='radio' id="korisnik" name='tip' value="korisnik.html" required > <label for="korisnik">Korisinik</label>
</div>

<div class="form-group">
<button onclick="fja()" class="btn btn-primary">Nastavi</button>
</div>
</form>
</div>
</div>
</div>
</div>












<?php
	session_start();
?>
<html>
<head>                 
</head>	
<body>
<?php require("header.php");?>
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
	<h2>REGISTRACIJA</h2>
	<?php
		if(isset($_SESSION['poruka'])){
			echo'<font color="read">'.$_SESSION['poruka'].'</font>';
		}
	?>
	<form name='mojaforma' action="reg.php" method="POST">
		<div class="row form-group">
				<div class="col-md-6">
						<!-- <label for="fname">First Name</label> -->
						<input type="text" name="korisnickoIme" class="form-control" placeholder="Korisnicko ime" >
				</div>
		</div>

		<div class="row form-group">
				<div class="col-md-6">
						<!-- <label for="email">Email</label> -->
						<input type="text" name="Email" class="form-control" placeholder="Your email address">
				</div>
		</div>
								
		<div class="row form-group">
			<div class="col-md-6">
				<!-- <label for="fname">First Name</label> -->
				<input type="password" name="lozinka" class="form-control" placeholder="Lozinka">
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-md-6">
				<!-- <label for="fname">First Name</label> -->
				<input type="password" name="PonovoLoz" class="form-control" placeholder="Ponovljena lozinka">
					</div>
		</div>
		
		<div class="row form-group">
			<input type='radio' id="sponzor" name='tip' value='1' > <label for="sponzor">Sponzor</label>
			<input type='radio' id="trener" name='tip' value='2' > <label for="trener">Trener</label>

			<input type='radio' id="korisnik" name='tip' value='3' > <label for="korisnik">Korisinik</label>
		</div>
					
		<div class="form-group">
				<input name="nastavi" value="Nastavi" type="submit">
		</div>
		
	</form>	
	
	<?php require("footer.php");?>
		
	<script language="JavaScript">
		function proveriRegistraciju(){
			korIme=document.mojaforma.korisnickoIme.value;
			email=document.mojaforma.Email.value;
			loz=document.mojaforma.lozinka.value;
			ponovljenaLoz=document.mojaforma.PonovoLoz.value;
			tip=document.mojaforma.tip.value;
		
			if(korIme.length==0){
				alert("Niste uneli korisnicko ime!");
				return;
			}
			
			if(email.length==0){
				alert("Niste uneli email!");
				return;
			}
			
			if(loz.length==0){
				alert("Niste uneli lozinku!");
				return;
			}
			
			if(ponovljenaLoz.length==0){
				alert("Niste uneli ponovljenu lozinku!");
				return;
			}
			
			if(tip.length==0){
				alert("Niste odabrali tip!");
				return;
			}
			
			if(ponovljenaLoz!=loz){
				alert("Ponovljena lozinka se ne poklapa sa unetom lozinkom!");
				return;
			}
			
			var pEmail = /^\w{3,}@[a-z]{2,}[.]([a-z]){2,}$/;
			var proveraEmail;
			if((proveraEmail = pEmail.test(eposta)) == false){
				alert("Niste uneli ispravnu email adresu!");
				return;
			}
			
			document.forms["registracija"].submit();
		}
	</script>

</body>
</html>

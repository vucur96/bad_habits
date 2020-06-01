<html>
<head>                 
</head>	
<body>
	<?php require("header.php");?>
	<br>
	<h2>REGISTRACIJA</h2>
	<form name='mojaforma' action="reg.php" method="POST">
		<div class="row form-group">
				<div class="col-md-6">
						<!-- <label for="fname">First Name</label> -->
						<input type="text" name="korisnickoIme" class="form-control" placeholder="Korisnicko ime" required>
				</div>
		</div>

		<div class="row form-group">
				<div class="col-md-6">
						<!-- <label for="email">Email</label> -->
						<input type="text" name="Email" class="form-control" placeholder="Your email address"required>
				</div>
		</div>
								
		<div class="row form-group">
			<div class="col-md-6">
				<!-- <label for="fname">First Name</label> -->
				<input type="password" name="lozinka" class="form-control" placeholder="Lozinka"required>
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-md-6">
				<!-- <label for="fname">First Name</label> -->
				<input type="password" name="PonovoLoz" class="form-control" placeholder="Ponovljena lozinka"required>
					</div>
		</div>
		
		<div class="row form-group">
			<input type='radio' id="sponzor" name='tip' value="sponzor.html" required> <label for="sponzor">Sponzor</label>
			<input type='radio' id="trener" name='tip' value="trener.html" required> <label for="trener">Trener</label>

			<input type='radio' id="korisnik" name='tip' value="korisnik.html" required > <label for="korisnik">Korisinik</label>
		</div>
					
		<div class="form-group">
				<button onclick="proveriRegistraciju()" class="btn btn-primary">Nastavi</button>
		</div>
		
	</form>	
	<?php require("footer.php");?>
					
	<script>
			function fja(){
				var all=document.getElementsByName('tip');
				for(i=0;i<all.length;i++){
					if(all[i].type="radio"){
					if(all[i].checked){
						window.open(all[i].value,"_self");
					}
					}
				}
			}
			
	</script>	
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
			fja();
		}
	</script>

</body>
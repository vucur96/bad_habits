<body>
<?php require('header.php'); ?>
						<br>
						<h2>REGISTRACIJA KORISNIKA
                        
                        </h2>
						<form name="registracijakor" action="regkor.php" method="POST">
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input type="text" name="ime" class="form-control" placeholder="Vaše ime" required>
								</div>
							</div>
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <!-- <label for="fname">First Name</label> -->
                                    <input type="text" name="prezime" class="form-control" placeholder="Vaše prezime" required>
                                        </div>
                            </div>

							<div class="row form-group">
								<div class="col-md-6">
								
									<input type="date" name="datumrodj" class="form-control" placeholder="Datum rodjenja" min="1930-01-01"required>
								</div>
							</div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <!-- <label for="fname">First Name</label> -->
                                    <input type="number" name="visina" class="form-control" placeholder="Vaša visina(u cm)" min="100" max="250"required>
                                        </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <!-- <label for="fname">First Name</label> -->
                                    <input type="number" name="tezina" class="form-control" placeholder="Vaša težina(u kg)" min="30" max="500" required>
                                        </div>
                            </div>
                            <div class="row form-group">
                               <div>
                                   <p> Vaš cilj: </p>
                                   <textarea name="cilj" rows="5" cols="30"></textarea>
                                   </div>
                            </div>
                        
                
							<div class="form-group">
								<input type="value" value="Registruj" onclick="proveriKorisnika()" class="btn btn-primary">
				</div>
						</form>		
					</div>
				</div>
			</div>
   <?php require('footer.php') ?>
		
<script language="JavaScript">
    function proveriKorisnika(){
        name =document.registracijakor.ime.value;
        surrname= document.registracijakor.prezime.value;
        datebir=document.registracijakor.datumrodj.value;
        height=document.registracijakor.visina.value;
        weight=document.registracijakor.tezina.value;
        goal=document.registracijakor.cilj.value;
        
        if((name.length==0) || (surrname.length==0) || ( datebir.length==0) ||(height.length==0) ||(weight.length==0) || (goal.length==0)){
            alert("Nisu popunjena sva polja!");
            return;
        }
        
        var pime= /^[A-Z]([a-z])+$/g;
        if(name.search(pime) == -1)
            error+= "Pogresan unos imena!\n"
        else tacnoime=true;
        
        var pprezime= /^[A-Z]([a-z])+$/g;
        if(surrname.search(pprezime) == -1)
            error+= "Pogresan unos prezimena!\n";
        else tacnoprezime=true;
        
        if((error == "")&&(tacnoime==true)&&(tacnoprezime==true)) document.forms["registracijakor"].submit();
        else alert(error);
  }
<body>

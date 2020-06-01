<body>
<?php require('header.php'); ?>
<aside id="colorlib-hero">
                <div class="flexslider">
                    <ul class="slides">
                        <li style="background-image: url(images/img_bg_2.jpg);">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                        <div class="slider-text-inner text-center">
                                            <h1>Registracija trenera</h1>
                                            <h2><span><a href="index.html">Početna</a> | Registracija trenera</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
						<br>
						<h2>REGISTRACIJA TRENERA
                        
                        </h2>
						<form name="registracijatr" action="regtr" method="POST">
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
                                    
                                    <input type="date" name="datumrodj" class="form-control" placeholder="Datum rodjenja" min="1930-01-01" max="2003-01-01"required>
                                        </div>
                                </div>
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <!-- <label for="fname">First Name</label> -->
                                    <input type="text" name="kurs" class="form-control" placeholder="Kursevi za koji ste specijalizovani"required>
                                        </div>
                            </div>
                          
                
							<div class="form-group">
                    <div class="form-group">
                        <input type="value" value="Registruj" onclick="proveriTrenera()" class="btn btn-primary">
                                </div>
						</form>		
					</div>
				</div>
			</div>
<?php require('footer.php') ?>

<script language="JavaScript">
function proveriTrenera(){
    name =document.registracijakor.ime.value;
    surrname= document.registracijakor.prezime.value;
    datebir=document.registracijakor.datumrodj.value;
    kursk=document.registracijakor.kurs.value;

    
    if((name.length==0) || (surrname.length==0) || ( datebir.length==0) ||(kurs.length==0)){
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


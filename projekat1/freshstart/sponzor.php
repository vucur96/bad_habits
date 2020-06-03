
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
                                            <h1>Registracija sponzora</h1>
                                            <h2><span><a href="index.html">Početna</a> | Registracija sponzora</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
<h2>REGISTRACIJA SPONZORA
                        
                        </h2>
						<form name='registracijaspon' action="regspoz.php" method="POST">
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input type="text" id="imefirme" class="form-control" placeholder="Ime Vaše firme" required>
								</div>
							</div>
                            <div class="row form-group">
                                <div>
                                    <p> Opis delatnosti firme: </p>
                                    <textarea name="opisdel" rows="5" cols="50"required></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                </p>Vrsta reklame koju želite:</p>
                               <p> <input type="checkbox" name="vrstarek" value="proizvod">Reklamiranje Vašeg proizovda u teretani</p>
                               <p> <input type="checkbox" name="vrstarek" value="poster">Reklamiranje Vaše firme u vidu postera</p>
                               <p> <input type="checkbox" name="vrstarek" value="flajer">Reklamiranje Vaših flajera</p>
                                        
                                            </div>
							<div class="form-group">
								<input type="button" value="Registruj" onclick="proveriSponzora()" class="btn btn-primary">
							</div>
						</form>		
					</div>
				</div>
			</div>
<?php require('footer.php') ?>

<script language="JavaScript">
function proveriSponzora(){
    name =document.registracijaspon.imefirme.value;
    opisd= document.registracijaspon.opisdel.value;
   vrsta=document.registracijaspon.vrstarek.value;

    
    if((name.length==0) || (opisd.length==0) || ( vrsta.length==0)){
        alert("Nisu popunjena sva polja!");
        return;
    }

    
    if((error == "")) document.forms["registracijaspon"].submit();
    else alert(error);
}
<body>

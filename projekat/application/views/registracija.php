<br>
						<h2>REGISTRACIJA
                        
                        </h2>
                        <form name='mojaforma' action="#">
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

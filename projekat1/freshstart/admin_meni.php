<?php
	session_start();
	
?>

<head>
  <title>Admin meni</title>
</head>

     <div id="header">
     <?php require("header_adm.php"); ?> 
     </div>


<div class="col-md-10 col-md-offset-1 animate-box">

						
						
						<br><br>
							
                
							<div class="form-group" >
								<button onclick="window.location.href='zahtevikorisnika.php'" class="btn btn-primary" > Zahtevi korisnika </button>
							</div>
							<div class="form-group">
								<button  onclick="window.location.href='brisanjekorisnika.php'" class="btn btn-primary" > Brisanje korisnika </button>
							</div>
							<div class="form-group">
								<button  onclick="window.location.href='promenastatusa.php'" class="btn btn-primary" > Promena statusa </button>
							</div>
							<div class="form-group">
								<button  onclick="window.location.href='adminblog.php'" class="btn btn-primary" > Blog </button>
							</div>
				
						
</div>
	
	
</div>
<?php require("footer.php") ?>
</div>


<?php
	session_start();
?>
<html>
<head>
</head>
<body>
<?php 
	if(!isset($_SESSION['KorisnickoIme'])){
		require('header.php');
	}else{
		require("konekcija.php");
		$upit2 = "SELECT * FROM korisnik WHERE KorisnickoIme='".$_SESSION['KorisnickoIme']."'";
		$rezultat2 = mysqli_query($konekcija, $upit2) or die("Greska kod upita za proveru šifre!" . mysqli_error($konekcija));
		if (mysqli_num_rows($rezultat2) == 1){
			$red = mysqli_fetch_array($rezultat2);
			$tip = $red['tip'];
			
			if($tip==1){
				require('header_spon.php');
			}else{
				if ($tip==2){
					require('header_tren.php');
				}else{
					require('header_kor.php');
				}
			}
		}else{
			require('header_adm.php');
		}
		mysqli_close($konekcija);
	}
?>
		
<aside id="colorlib-hero">
<div class="flexslider">
<ul class="slides">
<li style="background-image: url(images/img_bg_2.jpg);">
<div class="overlay"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
<div class="slider-text-inner text-center">
<h1>Treninzi</h1>
<h2><span><a href="index.php">Početna</a> | <a href="classes.php">Treninzi</a> | Individualni treninzi</span></h2>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>

<div class="colorlib-classes">
<div class="container">
<div class="row">
<div class="col-md-8 animate-box">
<div class="classes">
							<div class="classes-img classes-img-single" style="background-image: url(images/classes-1.jpg);"></div>
							<div class="desc">
                                                            <h3><a href="aerobic.php">INDIVIDUALNI TRENINZI</a></h3>
								
									<p>
										Uzmi ono što imaju najbolji – ličnog trenera.

Imati cilj je dobro ali imati cilj, znanje, podršku i plan je daleko bolje!

Kao svi oni što imaju rezultate na kojima im zavide, dobićeš sopstvenog trenera koji će osmisliti i voditi tvoj program. Personalni trener je uvek tu da izvuče ono najbolje iz tebe, da osmisli i vodi trening koji je prilagođen baš tebi. On je tu da te usmeri, podrži i motiviše. Saznaćeš tajne vežbanja koje prave razliku između vrhunskih i osrednjih rezultata.

Treniraj sa trenerom 1 na 1 kao profesionalac.

Više o individualnom treningu:

Osmisliti i voditi trening zahteva ogromno znanje za koje su potrebne godine proučavanja i prakse. Individualnim treningom dobijaš uz sebe stručni tim i trenera. Raspolagaćeš decenijama iskustva i školovanja sertifikovanih profesionalaca.

Mnogi su primeri ljudi koji nisu istrajali u svojim zamislima. Ti nećeš biti jedan od njih! Tvoj personalni trener poznaje zamke treninga i motivacije i tu je da te motviše da na putu istraješ. Tu je da se pobrine ne samo da postigneš ciljeve kojima stremiš – već i da ih zadržiš. Snaga i gipkost, lepota i visok nivo energije, bolja koncentracija i zdravlje – služiće ti najbolje kada postanu trajno tvoji. Biti fit je način života. Biti fit je uživanje u životu.
									</p>
							</div>
						</div>
						<div class="classes-desc">
							<div class="row row-pb-lg">
								<div class="col-md-12">
									<h3>Benefiti</h3>
								</div>
								<div class="col-md-6">
									<ul>
										<li><i class="icon-check"></i> Dobar fizički izgled</li>
										<li><i class="icon-check"></i> Rehabilitacija</li>
										<li><i class="icon-check"></i> Generalno fizičko dobrostanje</li>
										<li><i class="icon-check"></i> Psihička dobrobit</li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul>
										<li><i class="icon-check"></i> Sportske performanse</li>
										<li><i class="icon-check"></i> Zdrav život</li>
										<li><i class="icon-check"></i> Zadovoljstvo</li>
										<li><i class="icon-check"></i> Zdrav program</li>
									</ul>
								</div>
								<div class="col-md-12">
								
								</div>
							</div>
							<div class="row row-pb-lg">
								<div class="col-md-12">
									<h2 class="colorlib-heading-2">23 Komentara</h2>
									<div class="review">
							   		<div class="user-img" style="background-image: url(images/person1.jpg)"></div>
							   		<div class="desc">
							   			<h4>
							   				<span class="text-left">Marko Marković</span>
							   				<span class="text-right">24 Mart 2018</span>
							   			</h4>
							   			<p>Sve preporuke!</p>
							   			<p class="star">
						   					<span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
							   			</p>
							   		</div>
							   	</div>
							   	<div class="review">
							   		<div class="user-img" style="background-image: url(images/person2.jpg)"></div>
							   		<div class="desc">
							   			<h4>
							   				<span class="text-left">Janko Radičević</span>
							   				<span class="text-right">24 Mart 2018</span>
							   			</h4>
							   			<p>Jako sam zadovoljan ovim treningom!</p>
							   			<p class="star">
						   					<span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
							   			</p>
							   		</div>
							   	</div>
							   	<div class="review">
							   		<div class="user-img" style="background-image: url(images/person3.jpg)"></div>
							   		<div class="desc">
							   			<h4>
							   				<span class="text-left">Zoran Perić</span>
							   				<span class="text-right">24 Mart 2018</span>
							   			</h4>
							   			<p>Svaka čast!</p>
							   			<p class="star">
						   					<span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
							   			</p>
							   		</div>
							   	</div>
								</div>
							</div>

							
						</div>
					</div>

					
				</div>
			</div>	
		</div>
<?php require('footer.php') ?>
</body>
</html>

		
		

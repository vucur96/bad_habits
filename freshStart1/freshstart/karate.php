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
			require('header.php');
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
<h2><span><a href="index.php">Početna</a> | <a href="classes.php">Treninzi</a> | Karate</span></h2>
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
							<div class="classes-img classes-img-single" style="background-image: url(images/karate.jpg);"></div>
							<div class="desc">
                                                            <h3><a href="karate.php">KARATE</a></h3>
								
									<p>
										Karate mogu da treniraju svi od 6-90 godina života. Najbolje je trenirati u karate školi, ili bar započeti, da uvidite neke osnove tehnike, stavova, držanja, način izvođenja udaraca, blokada, poluga. Kada steknete neko znanje možete da nastavite i sa samostalnim treniranjem. Važno je znati tehnike, blokade, vrste udaraca, kretanje i stavove. Kate su takođe važni elementi bez kojih ne možete napredovati. Kao i kod svake borilačke veštine važno je i disanje kao i koncentracija, kondicija, što se stiče treningom. Početak je uvek zagrevanje. Trčanje, skokovi, čučnjevi sa kombinacijom izvođenja nekih elemenata tehnike, razgibavanje, sklekovi, trbušnjaci. Zatim kreće učenje ili ponavljanje već naučenih elemenata tehnike individualno, pa uvežbavanje i izvođenje kata. Neki se obično i dele prema interesovanju za određeni deo karatea suspenzor, tako da jedan treninga se posvećuje vežbanju kumite (sparinga) i kata.
										Tradicionalni karate je najrasprostranjeniji u Japanu, odakle je potekao, a sportski karate je popularan u Evropi, pa tako i kod nas, ali i u ostalim zemljama sveta. Postoji još nekoliko vrsta karatea (go dju rju, kjokušinkai, okinava, fudokan, aširaha karatea i druge), a razlike u odnosu na sportski karate su na prvi pogled neprimetne. Odnosno, suština im je ista. U tradicionalnom karateu se, pre svega, stiče veština, nema takmičenja, dok u sportskom ima manje kontakata, a postoje i takmičenja u katama i borbama. Kod nas, sportskim karateom suspenzor dete može da počne da se bavi u takozvanim karate školicama. A prve kate – borbeni pokreti bez drugog takmičara, uče se godinu dana kasnije, jer u tom uzrastu deca mogu lako da zapamte pokrete.
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
		
		

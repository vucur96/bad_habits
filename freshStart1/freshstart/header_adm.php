<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>fresh start</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />

<!-- Facebook and Twitter integration -->
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900" rel="stylesheet">

<!-- Animate.css -->
<link rel="stylesheet" href="css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- Magnific Popup -->
<link rel="stylesheet" href="css/magnific-popup.css">

<!-- Flexslider  -->
<link rel="stylesheet" href="css/flexslider.css">

<!-- Owl Carousel -->
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

<!-- Flaticons  -->
<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

<!-- Theme style  -->
<link rel="stylesheet" href="css/style.css">

<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
<div class="colorlib-loader"></div>

	<div id="header">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="index.php">FRESH START</a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li><a href="<?php echo site_url('Admin/admin-meni') ?>">Početna</a></li>
								<li class="has-dropdown">
									<a href="classes.php">Treninzi</a>
									<ul class="dropdown">
										<li><a href="<?php echo site_url('Admin/classes-single') ?>">Classes Single</a></li>
										<li><a href="<?php echo site_url('Admin/cardio') ?>">Cardio</a></li>
										<li><a href="<?php echo site_url('Admin/funkcionalni') ?>">Funkcionalni</a></li>
										<li><a href="<?php echo site_url('Admin/yoga') ?>">Yoga</a></li>
										<li><a href="<?php echo site_url('Admin/aerobic') ?>">Aerobic</a></li>
										<li><a href="<?php echo site_url('Admin/karate') ?>">Karate</a></li>
										<li><a href="<?php echo site_url('Admin/body_pump') ?>">Body Pump</a></li>
										<li><a href="<?php echo site_url('Admin/snaga') ?>">Snaga</a></li>
									</ul>
								</li>
								<li class="has-dropdown">
									<a href="schedule.php">Raspored</a>
									<ul class="dropdown">
										<li><a href="<?php echo site_url('Admin/grupni_treninzi') ?>">Grupni treninzi</a></li>
										<li><a href="<?php echo site_url('Admin/individualni_treninzi') ?>">Individualni treninzi</a></li>
										
									</ul>
									
									
								</li>
								<li><a href="<?php echo site_url('Admin/o_trenerima') ?>">Treneri</a></li>
                                <li><a href="<?php echo site_url('Admin/o_sponzorima') ?>">Sponzori</a></li>
								<li><a href="<?php echo site_url('Admin/blog') ?>">Blog</a></li>
								<li><a href="<?php echo site_url('Admin/contact') ?>">Kontakt</a></li>
								<li class="btn btn-cta"><a href="<?php echo site_url('Admin/logout') ?>"><span>Izloguj me</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>


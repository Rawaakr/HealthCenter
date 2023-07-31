<?php include('includes/connect_db.php');
$req=$bdd->query ("SELECT * FROM departements");
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from theemon.com/m/mega-health/LivePreview/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 22:21:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mega-Health</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="assets/css/layers.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/navigation.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/settings.css" media="screen"/>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic" rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/global.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen"/>
		<link rel="stylesheet" type="text/less" href="assets/css/skin.less" media="screen"/>

	</head>
	<!--Content Area End-->
	<body data-ng-app="websiteApp" data-ng-controller="FormController">
		<!--Page loader Start-->
		<div class="loader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>
		<div id="wrapper">
			<?php include "includes/header.php"; ?>
			<div class="banner-section banner-image">
				<div class="container gallery">
					<div class="book-appointment-section appoint-link"	>
						<a href="login.html" class="inner-sec"> <span class="anchor-icon"> <i class="icon-calendar"></i> </span> prenez un rendez-vous </a>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="container">
					<div class="event-section about-us-section padd-top padd-b-50">
						<div class="row">
							<div  class="col-sm-6 set-margin-bot about-section">
								<h2>Mega-Health :</h2>
								<div class="common-padd-top about-section-para">
									<p>
										Le centre medical " Mega-Health " est l'un des meilleurs centres en Tunisie. Il est crée en 2022. Ce centre est doté par les meilleures compétences et les meilleures technologies.
										L'unité propose différentes spécialités telles que la cardiologie, la pédiatrie, l'endodontie et bien d'autres.
										
									</p>
								</div>
							</div>
							<div class="col-sm-6">
								<h2>gallerie</h2>
								<div id="owl-demo" class="owl-carousel owl-theme">
									<div class="item ">
										<div class="common-padd-top">
											<div class="row">
												<div class="zoom col-sm-6">
													<figure class=" about-image">
														<a class="single-fancybox" href="assets/images/about-1.jpg" data-fancybox-group="gallery"> <img src="assets/images/about-1.jpg" alt="image"/> </a>
													</figure>
												</div>
												<div class="zoom col-sm-6">
													<figure class=" about-image">
														<a class="single-fancybox" href="assets/images/about-2.jpg" data-fancybox-group="gallery"> <img src="assets/images/about-2.jpg" alt="image"/> </a>
													</figure>
												</div>
											</div>
										</div>
									</div>
									<div class="item ">
										<div class="common-padd-top">
											<div class="row">
												<div class="zoom col-sm-6">
													<figure class=" about-image">
														<a class="single-fancybox" href="assets/images/about-1.jpg" data-fancybox-group="gallery"> <img src="assets/images/about-1.jpg" alt="image"/> </a>
													</figure>
												</div>
												<div class="zoom col-sm-6">
													<figure class=" about-image">
														<a class="single-fancybox" href="assets/images/about-2.jpg" data-fancybox-group="gallery"> <img src="assets/images/about-2.jpg" alt="image"/> </a>
													</figure>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container padd-top padd-bottom">
					<div class="row">
						<div class="col-sm-6">
							<div class="depart-head">
								<h2>Nos départements</h2>
							</div>
							<div class="row">
								<div class="col-sm-6 about-image">
									<ul class=" depart-list">
									<?php while ($donnees = $req->fetch()) {
                                                ?>
										<li>
											<a href="#"><?php echo $donnees['titre'] ?></a>
										</li>
										
										<?php } ?>
									</ul>
									<div class="about-btn">
										<a href="departement.php" class="btn">voir plus</a>
									</div>
								</div>
								
							</div>
						</div>
						<br>
						<br>
						<br>
						<div class="col-sm-6">
							<figure class="col-sm-12 about-image">
								<img src="assets/images/operational.jpg" alt=""/>
							</figure>
						</div>
					</div>
				</div>
			</div>
			<?php include "includes/footer.php"; ?>
		</div>
		<!--container Start-->
		<!--Page Wrapper End-->
		<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="assets/js/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
		<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/owl.carousel.js"></script>
		<script type="text/javascript" src="assets/js/less.js"></script>
		<script type="text/javascript" src="assets/js/angular.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
		<!-- revolution slider Js -->
		<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.revolution-one.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.parallax.min.js"></script>
		<!--  revolution slider Js -->
		<script type="text/javascript" src="assets/js/site.js"></script>
		<!-- Switcher Js -->
		<script src="assets/js/theme-option/style-switcher/assets/js/style.switcher.js"></script>
		<script src="assets/js/theme-option/style-switcher/assets/js/jquery.cookie.js"></script>
		<!-- Switcher Js -->
	</body>

<!-- Mirrored from theemon.com/m/mega-health/LivePreview/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 22:21:59 GMT -->
</html>
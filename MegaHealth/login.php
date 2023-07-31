<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from theemon.com/m/mega-health/LivePreview/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 22:22:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mega-Health</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic" rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="screen"/>
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
		<div id="wrapper" class="blog-page">
		<?php include "includes/header.php"; ?>
			<div class="banner-section banner-image">
				<div class="container gallery">
					
				</div>
			</div>
			<section class="contactus ptb ptb-sm write-sec">

				<div class="container" >
					<div class="sec-title">
						<h2>Se connecter</h2>
					</div>
					<br>
					<br>
					<div class="form-sec" >
						
						<form method="post" action="controller/verifPatient.php" name="contactForm"  novalidate id="contact">
							<div class="row mb-28" >
								<div class="col-sm-6" >
									<label>Email</label>
									<input class="input-box" type="text" name="email" data-ng-model="formData.name" required="" data-ng-pattern = "/^[a-zA-Z]/" data-ng-class="{'error' : contactForm.name.$error.pattern && contactForm.$blured || contactForm.name.$invalid && successStatus}">
								</div>
							</div>
							<div class="row mb-28">
								<div class="col-sm-6">
									<label>Mot de passe</label>
									<input class="input-box" type="email" name="mdp" required="" data-ng-model="formData.email" data-ng-pattern = "/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/" data-ng-class="{'error' : contactForm.email.$error.pattern && contactForm.$blured || contactForm.email.$invalid && successStatus}">
								</div>
							</div>
							
							<input class="btn" type="submit" value="se connecter"	data-ng-click = "submitcotactusForm(contactForm.$invalid)">
							<p>Vous n'avez pas de compte ? <br><a href="#">créer un compte</a></p>
						</form>
					</div>
					<br>
					<br>
				</div>
			</section>
			<?php include "includes/footer.php"; ?>

		</div>
		<!--container Start-->
		<!--Page Wrapper End-->
		<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="assets/js/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/owl.carousel.js"></script>
		<script type="text/javascript" src="assets/js/angular.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>

		<script type="text/javascript" src="assets/js/less.js"></script>
		<!-- map    -->
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script type="text/javascript" src="assets/js/gmap.js"></script>
		<!-- maps  -->
		<script type="text/javascript" src="assets/js/site.js"></script>
		<!-- Switcher Js -->
		<script src="assets/js/theme-option/style-switcher/assets/js/style.switcher.js"></script>
		<script src="assets/js/theme-option/style-switcher/assets/js/jquery.cookie.js"></script>
		<!-- Switcher Js -->
	</body>

<!-- Mirrored from theemon.com/m/mega-health/LivePreview/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 22:22:22 GMT -->
</html>
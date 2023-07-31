<?php include('includes/connect_db.php');
$req=$bdd->query ("SELECT * FROM departements");
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from theemon.com/m/mega-health/LivePreview/departments.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 22:21:59 GMT -->
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
		<link rel="stylesheet" type="text/css" href="assets/css/flaticon.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/global.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen"/>
		<link rel="stylesheet" type="text/less" href="assets/css/skin.less" media="screen"/>
	</head>
	<!--Content Area End-->
	<body>
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
					<div class="book-appointment-section appoint-link"	>
						<a href="login.html" class="inner-sec"> <span class="anchor-icon"> <i class="icon-calendar"></i> </span> prenez un rendez-vous </a>
					</div>
				</div>
			</div>

			<section class="departments ptb ptb-sm">
				<div class="container">
					<div class="sec-title">
						<h2>Nos départements</h2>
					</div>
					<div class="search-sec">
						<form>
							<ul>
								<li>
									<input class="search-input" type="text" placeholder="Search Department">
									<button  class="fa fa-search"></button>
								</li>
							</ul>
						</form>
					</div>
					<div class="row mb-25">
					<?php while ($donnees = $req->fetch()) {
                                ?>
					
						<div class="col-sm-6">
							<div class="department-blocks">
								<span class="ambulance-icon flaticon-icon-12625"> </span>
								<div class="department-txt">
									<div class="sub-heading">
										<h4>Département <?php echo $donnees['titre'] ?></h4>
									</div>
									<a class="btn" href="book-appointment.html">prenez un rendez-vous</a>
								</div>
							</div>
						</div>
						
						
					<?php } ?>
					</div>
				</div>

			</section>

			<div class="more-department-section padd-top padd-bottom">
				<div class="container">
					<div class="text-center">
						<h3>Plus de département</h3>
					</div>
					<p>
						Si vous cherchez un département ou un traitement n'hésitez pas à nous contacter
					</p>
					<div class="text-center set-margin-top">
						<a href="contact-us.html" class="btn">contactez nous</a>
					</div>
				</div>
			</div>

			<?php include "includes/footer.php"; ?>


		</div>
		<!--container Start-->

		<!--Page Wrapper End-->
		<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="assets/js/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/owl.carousel.js"></script>
		<script type="text/javascript" src="assets/js/less.js"></script>
		<script type="text/javascript" src="assets/js/site.js"></script>
		<!-- Switcher Js -->
		<script src="assets/js/theme-option/style-switcher/assets/js/style.switcher.js"></script>
		<script src="assets/js/theme-option/style-switcher/assets/js/jquery.cookie.js"></script>
		<!-- Switcher Js -->
	</body>

<!-- Mirrored from theemon.com/m/mega-health/LivePreview/departments.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 22:22:00 GMT -->
</html>
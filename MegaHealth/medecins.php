<?php include('includes/connect_db.php');
$req=$bdd->query ("SELECT * FROM user");
?>
<?php include('includes/connect_db.php');
$req1=$bdd->query ("SELECT * FROM departements");
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from theemon.com/m/mega-health/LivePreview/doctors-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 22:22:00 GMT -->
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
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css" media="screen"/>
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
		<div id="wrapper">
		<?php include "includes/header.php"; ?>
			<div class="banner-section banner-image">
				<div class="container gallery">
					<div class="book-appointment-section appoint-link"	>
						<a href="login.html" class="inner-sec"> <span class="anchor-icon"> <i class="icon-calendar"></i> </span> prenez un rendez-vous </a>
					</div>
				</div>
			</div>
			<div class="content padd-top padd-bottom">
				<div class="container">
					<div class="text-left col-manage-section common-padd-bottom">
						<h2>Nos médecins</h2>
						<span class="col-manage"> <span class="dots-three"> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> </span> <span class="dots-two active-col"> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> <span class="dots"> </span> </span> </span>
					</div>

					<div class="select-section">
						<div class="select-heading">
							<h4>Chercher <span class="sub-heading">par departement</span></h4>
						</div>
						<form method="post" action="#" class="category-form">
				
							<span class="select-holder">
								<select>
								<?php while ($donnees1 = $req1->fetch()) {
                                                
                                                ?>
									<option><?php echo $donnees1['titre'] ?></option>
									<?php } ?>
								</select> 
								
								<span class="select-arrow"></span> 
								
							</span>
							<input type="submit" value="Chercher" class="select-search"/>
							
						</form>
						
					</div>
					<div class="row">
					<?php while ($donnees = $req->fetch()) {
                                                    if($donnees['role']==='Médecin'){
                                                ?>
						<div class="col-sm-4 zoom col-section">
						
							<figure class="grid-fig"><img src="assets/images/dr-grid-1.jpg" alt="" class="img-responsive"/>
							</figure>
							
							<article class="grid-details">
								<h4><?php echo $donnees['nom'] ?> <?php echo $donnees['prenom'] ?></h4>
								<span class="dr-des"><?php echo $donnees['departement'] ?></span>
								<p>
									Email : <?php echo $donnees['email'] ?>
									<br>
									Numéro de téléphone : <?php echo $donnees['telephone'] ?>
								</p>
								<a href="doctor-details.html" class="btn">view profile</a>
							</article>
							
						</div>
						<?php } } ?>
					
					</div>
					<div class="text-center pagi-nav">
						<a href="#" class="pagination-number active-section">1</a>
						<a href="#" class="pagination-number">2</a>
						<a href="#" class="pagination-number">3</a>
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

<!-- Mirrored from theemon.com/m/mega-health/LivePreview/doctors-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 22:22:03 GMT -->
</html>
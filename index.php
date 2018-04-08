<?php require('config.php') ?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PRIORI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Courses for Engineering students" />
	<meta name="keywords" content="free website, free, engineering, free courses, interactive" />
	<meta name="author" content="Abhishek_15IT202" />


	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

	<!-- sweetalert -->
	<link rel="stylesheet" type="text/css" href="<?php echo SITEURL.'sweetalert';?>/dist/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="<?php echo SITEURL.'sweetalert';?>/themes/google/google.css">
	<script src="<?php echo SITEURL.'sweetalert/dist/sweetalert.min.js';?>"></script>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="css/pricing.css">

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

	<div class="fh5co-loader"></div>

	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-right">

							<ul class="fh5co-social">
								<li><a href="www.facebook.com"><i class="icon-facebook2"></i></a></li>
								<li><a href="www.twitter.com"><i class="icon-twitter2"></i></a></li>
								<li><a href="www.github.com"><i class="icon-github"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="fh5co-logo"><a href="index.html"><i class="icon-study"></i>PRIORI<span>.</span></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</nav>

		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/img_bg_1.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center slider-text">
									<div class="slider-text-inner">
										<h1>SOME RANDOM TEXT</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/img_bg_2.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center slider-text">
									<div class="slider-text-inner">
										<h1>Get ready for an interactive learning</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/img_bg_3.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center slider-text">
									<div class="slider-text-inner">
										<h1>We Help You to Learn New Things</h1></p>
									</div>
								</div>
							</div>
						</div>
					</li>

				</ul>
			</div>
		</aside>

		<div id="fh5co-pricing" class="fh5co-bg-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h1>Choose</h1>
						<h4>Doctor or User ? </h4>
					</div>
				</div>
				<div class="row">
					<div class="pricing pricing--rabten">
						<div class="col-md-5">
							<div class="pricing__item">
								<div class="wrap-price">
									<!-- <div class="icon icon-user2"></div> -->

									<!-- <p class="pricing__sentence">Single user license</p> -->
								</div>
								<div class="pricing__price">
									<span class="pricing__anim pricing__anim--1">
										<span class="pricing__currency"></span>Doctor
									</span>
								</div>
								<div class="wrap-price">
									<form id="doctorVerify" method="get" action="doctor.php" onsubmit="return false;">
										<div class="form-group">
											<input id="doctorAddress" type="text" class="form-control" name="address" placeholder="Doctor Address">
										</div>
										<button type="submit" class="btn btn-primary btn-sm">Verify and Go</button>
									</form>
								</div>
							</div>
						</div>

						<div class="col-md-5">
							<div class="pricing__item">
								<div class="wrap-price">
								</div>
								<div class="pricing__price">
									<span class="pricing__anim pricing__anim--1">
										<span class="pricing__currency"></span>User
									</span>
								</div>
								<div class="wrap-price">
									<form id="userVerify" method="get" action="patient.php" onsubmit="return false;">
										<div class="form-group">
											<input id="userAddress" type="text" class="form-control" name="address" placeholder="User Address">
										</div>
										<button type="submit" class="btn btn-primary btn-sm">Verify and Go</button>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
			<div class="overlay"></div>
			<div class="container">


				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; 2018 PRIORI. All Rights Reserved.</small>
							<small class="block">Designed by <a href="#" target="_blank">Team <i>EXODUS</i></a> </small>
						</p>
					</div>
				</div>

			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
	var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

	// default example
	simplyCountdown('.simply-countdown-one', {
		year: d.getFullYear(),
		month: d.getMonth() + 1,
		day: d.getDate()
	});

	//jQuery example
	$('#simply-countdown-losange').simplyCountdown({
		year: d.getFullYear(),
		month: d.getMonth() + 1,
		day: d.getDate(),
		enableUtc: false
	});
	</script>

	<script type="text/javascript">
	$('#doctorVerify').on('submit', function() {

		if (typeof web3 !== 'undefined') {
			var address = $('#doctorAddress').val();
			var isAddress = web3.isAddress(address);

			if(!isAddress) {
				swal('Error', "Not a valid Address", 'error');
			}
			else {
				var doctorContract = web3.eth.contract(doctorAbi);
				var doctor = address;
				var doctorInstance = doctorContract.at(doctor);

				doctorInstance.getOwner(function (error, result) {
					if(!error) {
						doctorInstance.verify({from: result}, function (error, result) {
							if(!error) {
								window.location = "<?php echo SITEURL ?>doctor.php?address="+address;
							}
						});
					}
					else {
						swal("Error", "Contract error", "error");
					}
				});
			}

		}
		else {
			console.log("NOO");
		}
	});

	$('#userVerify').on('submit', function() {

		if (typeof web3 !== 'undefined') {
			var address = $('#userAddress').val();
			var isAddress = web3.isAddress(address);

			if(!isAddress) {
				swal('Error', "Not a valid Address", 'error');
			}
			else {
				var patientContract = web3.eth.contract(patientAbi);
				var patient = address;
				var patientInstance = patientContract.at(patient);

				patientInstance.getOwner(function (error, result) {
					console.log(result);
					if(!error) {
						patientInstance.verify({from: result}, function (error, result) {
							if(!error) {
								window.location = "<?php echo SITEURL ?>patient.php?address="+address;
							}
						});
					}
					else {
						swal("Error", "Contract error", "error");
					}
				});
			}

		}
		else {
			console.log("NOO");
		}
	});
</script>

</body>
</html>

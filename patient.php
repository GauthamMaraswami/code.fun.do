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
							<div id="fh5co-logo"><a href="index.php"><i class="icon-study"></i>PRIORI<span></span></a></div>
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

		<div>
			<div id="fh5co-pricing" class="fh5co-bg-section">
				<div class="container">
					<div class="row">
						<div class="pricing pricing--rabten">
							<div class="col-md-8">
								<div class="pricing__item">

									<div class="pricing__price">
										<span class="pricing__anim pricing__anim--1">
											<span class="pricing__currency"></span>Your Data</span>
										</div>
										<div class="wrap-price">
											<form>
												<div class="form-group">
													<label for="usr">Name:</label>
													<label for="usr" id="name"></label>
												</div>
												<div class="form-group">
													<label for="usr">Age:</label>
													<label for="usr" id="age"></label>
												</div>
												<div class="form-group">
													<label for="usr">Blood Group:</label>
													<label for="usr" id="bloodGroup"></label>
												</div>
												<div class="form-group">
													<label for="usr">Gender:</label>
													<label for="usr" id="gender"></label>
												</div>
												<div class="form-group">
													<label for="usr">Aadhar:</label>
													<label for="usr" id="aadhar"></label>
												</div>
												<div class="form-group">
													<label for="usr">Medical Insurance:</label>
													<label for="usr" id="medicalInsurance"></label>
												</div>
												<div class="form-group">
													<label for="usr">Category:</label>
													<label for="usr" id="category"></label>
												</div>
												<div class="form-group">
													<label for="usr">Funds in Insurance:</label>
													<label for="usr" id="abountGivenByUser"></label>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="fh5co-pricing" class="fh5co-bg-section">
					<div class="container">
						<div class="row">
							<div class="pricing pricing--rabten">
								<div class="col-md-8">
									<div class="pricing__item">

										<div class="pricing__price">
											<span class="pricing__anim pricing__anim--1">
												<span class="pricing__currency"></span>Give Permission
											</span>
										</div>
										<div class="wrap-price">
											<form id="givePermission" method="get" action="add_doctor.php" onsubmit="return false;">
												<div class="form-group">
													<input type="text" class="form-control" name="address" placeholder="Address" id="doctors_address_access">
												</div>
												<button type="submit" class="btn btn-sm" id="">Grant</button>
											</form>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div id="fh5co-pricing" class="fh5co-bg-section">
					<div class="container">
						<div class="row">
							<div class="pricing pricing--rabten">
								<div class="col-md-8">
									<div class="pricing__item">
										<div class="pricing__price">
											<span class="pricing__anim pricing__anim--1">
												<span class="pricing__currency"></span>Revoke Permissions
											</span>
										</div>
										<div class="wrap-price">
											<form id="revokePermission" method="get" action="add_doctor.php" onsubmit="return false;">
												<div class="form-group">
													<input type="text" class="form-control" name="address" placeholder="Address" id="doctors_address_revoke">
												</div>
												<button type="submit" class="btn btn-sm" id="">Revoke</button>
											</form>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div id="fh5co-contact">
					<div class="container">
						<div class="row">
						</div>
					</div>
				</div>

				<footer id="fh5co-footer" role="contentinfo" >
					<div class="overlay"></div>
					<div class="container">


						<div class="row copyright">
							<div class="col-md-12 text-center">
								<p>
									<small class="block">A PRIORI APP</small>
									<small class="block">Designed by <a href="#" target="_blank">Team <i>EQUINOX</i></a> </small>
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
			<!-- Google Map -->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
			<script src="js/google_map.js"></script>
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

			$('#givePermission').on('submit', function() {
				if (typeof web3 !== 'undefined') {
					var DAddress = $('#doctors_address_access').val();
					var DIsAddress = web3.isAddress(DAddress);

					var PAddress = "<?php echo $_GET['address'] ?>";
					var PIsAddress = web3.isAddress(PAddress);

					if(!PIsAddress) {
						swal('Error', "Not a valid Address", 'error');
					}
					else if(!DIsAddress) {
						swal('Error', "Not a valid Address", 'error');
					}
					else {
						var doctorContract = web3.eth.contract(doctorAbi);
						var patientContract = web3.eth.contract(patientAbi);

						var doctorInstance = doctorContract.at(DAddress);
						var patientInstance = patientContract.at(PAddress);

						patientInstance.getOwner(function (error, result) {
							if(!error) {
								patientInstance.addPermission(DAddress, {from: result}, function(error, result) {
									if(!error) {
										swal("Success", "Access given!", "success");
									}
									else {
										swal('Error', "Contract Error", 'error');
									}
								});
							}
							else {
								swal('Error', "Contract Error", 'error');
							}
						});
					}
				}
			});

			$('#revokePermission').on('submit', function() {
				if (typeof web3 !== 'undefined') {
					var DAddress = $('#doctors_address_revoke').val();
					var DIsAddress = web3.isAddress(DAddress);

					var PAddress = "<?php echo $_GET['address'] ?>";
					var PIsAddress = web3.isAddress(PAddress);

					if(!PIsAddress) {
						swal('Error', "Not a valid Address", 'error');
					}
					else if(!DIsAddress) {
						swal('Error', "Not a valid Address", 'error');
					}
					else {
						var doctorContract = web3.eth.contract(doctorAbi);
						var patientContract = web3.eth.contract(patientAbi);

						var doctorInstance = doctorContract.at(DAddress);
						var patientInstance = patientContract.at(PAddress);

						patientInstance.getOwner(function (error, result) {
							if(!error) {
								patientInstance.removePermission(DAddress, {from: result}, function(error, result) {
									if(!error) {
										swal("Success", "Access revoked!", "info");
									}
									else {
										swal('Error', "Contract Error", 'error');
									}
								});
							}
							else {
								swal('Error', "Contract Error", 'error');
							}
						});
					}
				}
			});

			window.addEventListener('load', function() {
				if (typeof web3 !== 'undefined') {
					var address = "<?php echo $_GET['address'] ?>";
					var isAddress = web3.isAddress(address);

					if(!isAddress) {
						swal('Error', "Not a valid Address", 'error');
					}
					else {
						var doctorContract = web3.eth.contract(doctorAbi);
						var patientContract = web3.eth.contract(patientAbi);

						var patient = address;
						var patinetInstance = patientContract.at(patient);

						patinetInstance.amountGivenByUser(function(error, result) {
							$('#abountGivenByUser').html(result.c[0]);
						});

						patinetInstance.getName(function(error, result) {
							if(!error) {
								$('#name').html(result);
							}
							else {
								swal('Error', "Contract error", 'error');
							}
						});
						patinetInstance.getAge(function(error, result) {
							if(!error) {
								$('#age').html(result.c[0]);
							}
							else {
								swal('Error', "Contract error", 'error');
							}
						});
						patinetInstance.getBloodGroup(function(error, result) {
							if(!error) {
								$('#bloodGroup').html(result);
							}
							else {
								swal('Error', "Contract error", 'error');
							}
						});
						patinetInstance.getGender(function(error, result) {
							if(!error) {
								$('#gender').html(result);
							}
							else {
								swal('Error', "Contract error", 'error');
							}
						});
						patinetInstance.getAadharNumber(function(error, result) {
							if(!error) {
								$('#aadhar').html(result.c[0]);
							}
							else {
								swal('Error', "Contract error", 'error');
							}
						});

						patinetInstance.getMedicalInsurance(function(error, result) {
							if(!error) {
								$('#medicalInsurance').html(result);
							}
							else {
								swal('Error', "Contract error", 'error');
							}
						});

						patinetInstance.getCategory(function(error, result) {
							if(!error) {
								$('#category').html(result);
							}
							else {
								swal('Error', "Contract error", 'error');
							}
						});
					}
				}
				else {
					swal("Error", "NO", "error");
				}
			});

			</script>
		</body>
		</html>

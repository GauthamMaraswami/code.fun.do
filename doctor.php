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

		<div id="fh5co-pricing" class="fh5co-bg-section">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h1>Doctor Details</h1>
						<h4>Here are the details of the Doctor </h4>
					</div>
				</div>
				<div class="row">
					<div class="pricing pricing--rabten">

						<div class="col-md-8 animate-box">
							<div class="pricing__item">
								<div class="wrap-price">
									<!-- <div class="icon icon-store"></div> -->

									<!-- <p class="pricing__sentence">Up to 5 users</p> -->
								</div>

								<div class="wrap-price">
									<form>
										<div class="form-group">
											<label for="usr">Name:</label>
											<label for="usr" id="doctorName"></label>
										</div>
										<div class="form-group">
											<label for="usr">Year Of Graduation:</label>
											<label for="usr" id="doctorYear"></label>
										</div>
										<div class="form-group">
											<label for="usr">Specialization:</label>
											<label for="usr" id="doctorSpecialization"></label>
										</div>
										<div class="form-group">
											<label for="usr">Degree:</label>
											<label for="usr" id="doctorDegree"></label>
										</div>
										<div class="form-group">
											<label for="usr">Is Verified:</label>
											<label for="usr" id="doctorVerified"></label>
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
								<div class="wrap-price">
								</div>
								<div class="pricing__price">
									<span class="pricing__anim pricing__anim--1">
										<span class="pricing__currency"></span><h2>Get Patient Records</h2>
									</span>

								</div>
								<div class="wrap-price">
									<form id="getPatientData" method="get" action="" onsubmit="return false;">
										<div class="form-group">
											<input id="patientAddress" type="text" class="form-control" name="address" placeholder="Patient Address">
										</div>
										<button type="submit" id="click" class="btn btn-sm">Go!</button>
									</form>

								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="pricing pricing--rabten">
						<div class="col-md-8">
							<div class="pricing__item">
								<div class="wrap-price">
								</div>
								<div class="pricing__price">
									<span class="pricing__anim pricing__anim--1">
										<span class="pricing__currency"></span><h2>Add New Record</h2>
									</span>
								</div>
								<div class="wrap-price">
									<form id="submitPatientData" method="get" action="" onsubmit="return false;">
										<div class="form-group">
											<input id="patientAddressNew" type="text" class="form-control" name="address" placeholder="Patient Address">
										</div>
										<div class="form-group">
											<input id="illness" type="text" class="form-control" name="address" placeholder="Illness">
										</div>
										<div class="form-group">
											<input id="cause" type="text" class="form-control" name="address" placeholder="Cause">
										</div>
										<div class="form-group">
											<input id="prescription" type="text" class="form-control" name="address" placeholder="Prescription">
										</div>
										<div class="form-group">
											<input id="remarks" type="text" class="form-control" name="address" placeholder="Remarks">
										</div>
										<button type="submit" id="click" class="btn btn-sm">Go!</button>
									</form>
								</div>

							</div>
						</div>
					</div>

					<div class="pricing pricing--rabten">
						<div class="col-md-8">
							<div class="pricing__item">
								<div class="wrap-price">
								</div>

								<div class="jquery-data">

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

	$('#submitPatientData').on('submit', function() {
		if (typeof web3 !== 'undefined') {
			var pAddress = $('#patientAddressNew').val();
			var PIsAddress = web3.isAddress(pAddress);

			var DAddress = "<?php echo $_GET['address'] ?>";
			var DIsAddress = web3.isAddress(DAddress);

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
				var patientInstance = patientContract.at(pAddress);

				patientInstance.getPermission(DAddress, function (error, result) {
					if(!error) {
						if(result == false) {
							swal("Error", "Patient has not given you access", "error");
						}
						else {
							doctorInstance.getOwner(function (error, result) {
								doctorInstance.addRecord($('#illness').val(), $('#cause').val(), $('#prescription').val(), $('#remarks').val(), pAddress, {from: result}, function(error, result) {
									console.log(result);
								});
							});
						}
					}
				});
			}
		}
	});

	$('#getPatientData').on('submit', function() {
		if (typeof web3 !== 'undefined') {
			var pAddress = $('#patientAddress').val();
			var PIsAddress = web3.isAddress(pAddress);

			var DAddress = "<?php echo $_GET['address'] ?>";
			var DIsAddress = web3.isAddress(DAddress);
			var patientContract = web3.eth.contract(patientAbi);
			var patientInstance = patientContract.at(pAddress);

			/*patientInstance.addPermission(DAddress, function(error, result) {
				if(!error) {
					swal("Success", "Access given!", "success");
				}
				else {
					swal('Error', "Contract Error", 'error');
				}
			});*/

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
				var patientInstance = patientContract.at(pAddress);

				patientInstance.getPermission(DAddress, function (error, result) {

					if(!error) {
						if(result == false) {
							swal("Error", "Patient has not given you access", "error");
						}
						else {
							patientInstance.getRecordsCount(function (error, result) {
								if(!error) {
									var records = result.c[0];
									if(records == 0) {
										swal("Error", "No Records found", "error");
									}
									else {
										var html = "";
										for (var i = 0; i < records; i++) {
											html += '<div class="pricing__price">';
											html += '	<span class="pricing__anim pricing__anim--1">';
											html += '		<span class="pricing__currency"></span><h2 id="time'+i+'"></h2>';
											html += '	</span>';
											html += '</div>';
											html += '<div class="wrap-price">';
											html += '	<div class="wrap-price">';
											html += '		<form>';
											html += '			<div class="form-group">';
											html += '				<label for="usr">Doctor:</label>';
											html += '				<label for="usr" id="doctorAddress'+i+'"></label>';
											html += '			</div>';
											html += '			<div class="form-group">';
											html += '				<label for="usr">Illness:</label>';
											html += '				<label for="usr" id="illness'+i+'"></label>';
											html += '			</div>';
											html += '			<div class="form-group">';
											html += '				<label for="usr">Cause:</label>';
											html += '				<label for="usr" id="cause'+i+'"></label>';
											html += '			</div>';
											html += '			<div class="form-group">';
											html += '				<label for="usr">Prescription:</label>';
											html += '				<label for="usr" id="prescription'+i+'"></label>';
											html += '			</div>';
											html += '			<div class="form-group">';
											html += '				<label for="usr">Remarks:</label>';
											html += '				<label for="usr" id="remarks'+i+'"></label>';
											html += '			</div>';
											html += '		</form>';
											html += '	</div>';
											html += '</div>';
										}
										$('.jquery-data').html('');
										$('.jquery-data').append(html);

										for (var i = records-1; i >= 0 ; i--) {
											patientInstance.getRecordIllness(i ,function (error, result) {
												$('#illness'+result[1].c[0]).append(result[0]);
											});
											patientInstance.getRecordCause(i ,function (error, result) {
												$('#cause'+result[1].c[0]).html(result[0]);
											});
											patientInstance.getRecordPrescreption(i ,function (error, result) {
												$('#prescription'+result[1].c[0]).html(result[0]);
											});
											patientInstance.getRecordTime(i ,function (error, result) {
												var d = new Date((result[0].c[0])*1000);
												$('#time'+result[1].c[0]).html(d.getDate() + '/' + (d.getMonth()+1) + '/' + d.getFullYear());
											});
											patientInstance.getRecordDoctor(i ,function (error, result) {
												$('#doctorAddress'+result[1].c[0]).html(result[0]);
											});
											patientInstance.getRecordRemarks(i ,function (error, result) {
												$('#remarks'+result[1].c[0]).html(result[0]);
											});
										}
									}
								}
								else {
									swal("Error", "Contract error", "error");
								}
							});
						}
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

				var doctor = address;
				var doctorInstance = doctorContract.at(doctor);

				doctorInstance.getYearOfGraduation(function(error, result) {
					if(!error) {
						$('#doctorYear').html(result.c[0]);
					}
					else {
						swal('Error', "Contract error", 'error');
					}
				});
				doctorInstance.getName(function(error, result) {
					if(!error) {
						$('#doctorName').html(result);
					}
					else {
						swal('Error', "Contract error", 'error');
					}
				});
				doctorInstance.isVerified(function(error, result) {
					if(!error) {
						if(result === true) {
							$('#doctorVerified').html("<p style='color: green'>Yes</p>");
						}
						else {
							$('#doctorVerified').html("<p style='color: red'>No</p>");
						}
					}
					else {
						swal('Error', "Contract error", 'error');
					}
				});
				doctorInstance.getSpecialization(function(error, result) {
					if(!error) {
						$('#doctorSpecialization').html(result);
					}
					else {
						swal('Error', "Contract error", 'error');
					}
				});
				doctorInstance.getDegree(function(error, result) {
					if(!error) {
						$('#doctorDegree').html(result);
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

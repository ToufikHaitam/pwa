<!DOCTYPE html>

<?php
session_start();
?>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Générale de téléphone</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../../../public/ace/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../../../public/ace/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="../../../public/ace/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../../../public/ace/css/ace.min.css" />

		<!--[if lte IE 9]>
        <link rel="stylesheet" href="../../../public/ace/css/ace-part2.min.css"/>
        <![endif]-->
		<link rel="stylesheet" href="../../../public/ace/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
        <link rel="stylesheet" href="../../../public/ace/css/ace-ie.min.css"/>
        <![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
        <script src="../../../public/ace/js/html5shiv.min.js"></script>
        <script src="../../../public/ace/js/respond.min.js"></script>
        <![endif]-->
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>

									<span class="black">Portail de connexion</span>

								</h1>
								<h4 class="orange" id="id-company-text"> Générale de téléphone</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header black lighter bigger">
												<i class="ace-icon fa fa-coffee orange"></i>
												Entrer vos identifiants
											</h4>

											<div class="space-6"></div>

											<form method="post"  action="accuei.php">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">

															<input type="text" id="username" name='username' class="form-control" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">

															<input type="password" id="password" name='password' class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<span id="status"></span>
														<input  id="start-button" type="button" value="Connexion" class="width-35 pull-right btn btn-sm btn-primary" />

													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>



											<div class="space-6"></div>

											<div class="social-login center">

											</div>
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>

											</div>

											<div>


											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Send Me!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												New User Registration
											</h4>

											<div class="space-6"></div>
											<p> Enter your details to begin: </p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Repeat password" />
															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label>

													<label class="block">
														<input type="checkbox" class="ace" />
														<span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">Reset</span>
														</button>

														<button type="button" class="width-65 pull-right btn btn-sm btn-success">
															<span class="bigger-110">Register</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->


						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="../../../public/ace/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
        <script src="../../../public/ace/js/jquery-1.11.3.min.js"></script>
        <![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../../../public/ace/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">


			// For details on different authentication features of M-Files REST API, please see:
			// http://www.m-files.com/mfws/gettingstarted.html

			// We are using jQuery's AJAX methods (and promise pattern) to simplify making
			// REST API calls (jQuery will add headers like "Content-type: application/json" automatically).
			// For details, please see especially:
			// http://api.jquery.com/jquery.post/
			// http://api.jquery.com/jquery.get/
			// http://api.jquery.com/jquery.ajax/

			// Waiting for the DOM to be ready before proceeding.
			$(document).ready(function() {

				// TODO: configure these to match your setup.
				// NOTE! In real life applications, always use HTTPS to avoid sending clear-text credentials accross the network!
				var host = 'http://localhost:80/M-Files/REST';
				var vault = '{AF6AA738-B886-452E-9B0B-105A51F5DE67}';


				// Register the connect() function below as click handler for the Start button.
				$('#start-button').click(connect);

				// Connects (authenticates) to a vault with the username & password given by the user via the HTML
				// input fields.
				function connect() {
					// E.g. "http://localhost/M-Files/REST/server/authenticationtokens"
					$.post(host + '/server/authenticationtokens', JSON.stringify({
						Username: $('#username').val(),				// From user input, e.g. "Test1"
						Password: $('#password').val(),				// From user input, e.g. "Test1"
						VaultGuid: vault
					}))
					.done(processToken)		// All good, process the authentication token
					.fail(processError);	// Error occurred, process the error
				}

				function processToken(token) {
					// Authentication token received successfully, store it for later use (the
					// header will be added to all subsequent REST calls made with jQuery).
					$.ajaxSetup({ headers: { 'X-Authentication' : token.Value } });
					$.get(host + '/objects?auth=' + token.Value)
					.done(function(result) {
						// Simply print the results to the console:

						/* console.log(result);
						var r = $('#username').val();
						console.log(r); */
						Z = document.getElementById('start-button');
						Z.type="submit";
						Z.click();
						// document.location.href="accuei.php";

					})
					.fail(processError);
					// Update UI to show correct status:



				}

				function processError(err) {
					$('#status').text('Error occurred, please see the browser\'s developer console for details!');
					console.log('jQuery error object:');
					console.log(err);
				}
			});







			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});



			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');

				e.preventDefault();
			 });

			});
		</script>
	</body>
</html>

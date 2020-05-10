
























<!DOCTYPE html>
<?php
session_start();










?>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Portail de connexion de générale téléphone</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../../../public/ace/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../../../public/ace/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="../../../public/ace/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../../../public/ace/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
        <link rel="stylesheet" href="../../../public/ace/css/ace-part2.min.css" class="ace-main-stylesheet"/>
        <![endif]-->
		<link rel="stylesheet" href="../../../public/ace/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../../../public/ace/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
        <link rel="stylesheet" href="../../../public/ace/css/ace-ie.min.css"/>
        <![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../../../public/ace/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
        <script src="../../../public/ace/js/html5shiv.min.js"></script>
        <script src="../../../public/ace/js/respond.min.js"></script>
        <![endif]-->
	</head>

	<body class="skin-1">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Générale de téléphone
						</small>
					</a>
				</div>


			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">



				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="accuei.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Accueil </span>
						</a>

						<b class="arrow"></b>

						</li>
					<li class="">

						<a href="CNT.php">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Gérer les contrats NT
							</span>


						</a>

						<b class="arrow"></b>


					</li>

					<li class="active">
						<a href="CEC.php" >
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Gérer les contrats EC </span>


						</a>

						<b class="arrow"></b>


					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Gérer les relances </span>


						</a>

						<b class="arrow"></b>


					</li>



					<li class="">
						<a href="calendar.html">
							<i class="menu-icon fa fa-calendar"></i>

							<span class="menu-text">
								Voir les contrats H


							</span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="gallery.html">
							<i class="menu-icon fa fa-picture-o"></i>
							<span class="menu-text"> Voir les contrats NH </span>
						</a>

						<b class="arrow"></b>
					</li>




				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">

					</div>

					<div class="page-content">
						<!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Contrats En cours de traitement

							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="col-xs-12 col-sm-6 widget-container-col ui-sortable" id="widget-container-col-2">
											<div class="widget-box widget-color-orange" id="widget-box-2">
												<div class="widget-header">
													<h5 class="widget-title bigger lighter">
														<i class="ace-icon fa fa-table"></i>
														Liste des contrats en cours de traitement
													</h5>


												</div>

												<div class="widget-body" id="project-view" style="display: none">
													<div class="widget-main no-padding">
														<table class="table table-striped table-bordered table-hover" >
															<thead class="thin-border-bottom">
																<tr>
																	<th>
																		<i class=""></i>
																		Document
																	</th>

																	<th>
																		Date signature
																	</th>
																	<th>

																		Num contrat
																	</th>
																	<th class="">
																	<i class="ace-icon fa fa-user"></i>
																	Num PI</th>
																	<th>

																		Accès contrat
																	</th>

																</tr>
															</thead>

															<tbody id="table-body">
																<tr>
																	<td class="">5986325</td>

																	<td>
																		11/11/2016
																	</td>

																	<td class="hidden-480">
																		<button type="button" class="width-50 pull-left btn btn-sm btn-primary">
																			<span class="bigger-100">traiter</span>
														</button>
																	</td>
																</tr>

																<tr>
																	<td class="">5986324</td>

																	<td>
																		11/12/2016
																	</td>

																	<td class="hidden-480">
																		<button type="button" class="width-50 pull-left btn btn-sm btn-primary" Value="5986324">
																			<span class="bigger-100">traiter</span>
																	</td>
																</tr>

																<tr>
																	<td class="">Jack</td>

																	<td>
																		<a href="#">jack@email.com</a>
																	</td>

																	<td class="hidden-480">
																		<span class="label label-warning">Pending</span>
																	</td>
																</tr>

																<tr>
																	<td class="">John</td>

																	<td>
																		<a href="#">john@email.com</a>
																	</td>

																	<td class="hidden-480">
																		<span class="label label-inverse arrowed">Blocked</span>
																	</td>
																</tr>

																<tr>
																	<td class="">James</td>

																	<td>
																		<a href="#">james@email.com</a>
																	</td>

																	<td class="hidden-480">
																		<span class="label label-info arrowed-in arrowed-in-right">Online</span>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>













								<!-- /.col -->

						</div>



















								<!-- PAGE CONTENT ENDS -->

						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="orange bolder">Générale de téléphone</span>
							&copy; 2017
						</span>


					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
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
		<script src="../../../public/ace/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
<script src="../../../public/ace/js/bootstrap-datepicker.min.js"></script>
		<script src="../../../public/ace/js/jquery.jqGrid.min.js"></script>
		<script src="../../../public/ace/js/grid.locale-en.js"></script>
		<!--[if lte IE 8]>
        <script src="../../../public/ace/js/excanvas.min.js"></script>
        <![endif]-->

		<!-- ace scripts -->
		<script src="../../../public/ace/js/ace-elements.min.js"></script>
		<script src="../../../public/ace/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">

			// In this example we will be fetching a list of files in a specified document (remember that in M-Files
			// a "document" and a "file" are two different concepts - after all, a single document can contain
			// multiple files). See processToken() function below for details.

			// We are using jQuery's AJAX methods (and promise pattern) to simplify making
			// REST API calls (jQuery will add headers like "Content-type: application/json" automatically).
			// For details, please see especially:
			// http://api.jquery.com/jquery.post/
			// http://api.jquery.com/jquery.get/
			// http://api.jquery.com/jquery.ajax/

				var tokeen;
					var numPI;
						var numcli;
						var datesignature;
			// Waiting for the DOM to be ready before proceeding.
			$(document).ready(function() {

				// TODO: configure these to match your setup.
				// NOTE! In real life applications, always use HTTPS to avoid sending clear-text credentials accross the network!
				var host = 'http://localhost/M-Files/REST';
				var vault = '{AF6AA738-B886-452E-9B0B-105A51F5DE67}';

				// Register the connect() function below as click handler for the "Connect" button.

				// Register fetchProjects() function as a click handler for the "Fetch listing" -button.
				var p = connect();

				// Connects (authenticates) to a vault with the username & password given by the user via the HTML
				// input fields.

				function connect() {
				console.log("ok");
					// E.g. "http://localhost/M-Files/REST/server/authenticationtokens"
					$.post(host + '/server/authenticationtokens', JSON.stringify({
						Username: "NAJAM",				// From user input, e.g. "Test1"
						Password: "Leswinners19.",				// From user input, e.g. "Test1"
						VaultGuid: vault
					}))
					.done(processToken)		// All good, process the authentication token
					.fail(processError);	// Error occurred, process the error
				}

				function processToken(token) {
					// Authentication token received successfully, store it for later use (the
					// header will be added to all subsequent REST calls made with jQuery).
					$.ajaxSetup({ headers: { 'X-Authentication' : token.Value } });
					tokeen=token;
					// Disable "Connect" button
					fetchProjects(tokeen);

					// Update UI to show correct status:


					// Show the relevant section of DOM to enable fetching projects
					$('#project-view').show();
				}

				function fetchProjects(tokeen) {
					// Get the customer ID given by the user
					var egID = "EC";
					// ID of the property in Project that refers to a Customer
					var egPropDefID = 1148;
					// Construct a URL paramater accordingly, e.g. '&p1079=141' (if customerID not given, param will be empty)
					var egParam = egID ? '&p' + egPropDefID + '=' + egID : '';

					console.log("param: " + egParam);

					// Search all Customer project objects referring to the given Customer (or all Customer projects if Customer ID not given).
					// Property 100 is the Class, property 1079 is the Customer reference.
					// E.g. "http://localhost/M-Files/REST/objects/101?p100=80&p1079=141"

					$.get(host + '/objects/0?objecttype=0' + egParam +'&auth=' + tokeen.Value )
						.done(function(result) {
							console.log(host + '/objects/0?objecttype=0&typedvalue=10/1234' + egParam);
								console.log(host + '/objects/0?p100=80' + egParam +'/V136/L141/items.aspx');

									// Use our helper funtion to display results in an HTML table
						})
						.fail(processError);


					//p1078=22 project id 22
					$.get(host + '/objects/0?objecttype=0&typedvalue=10/1234' + egParam)
						.done(function(result) {
							console.log(result.Items);

							showInTable(result.Items);
									// Use our helper funtion to display results in an HTML table
						})
						.fail(processError);
				}

				function processError(err) {
					$('#status').text('Error occurred, please see the browser\'s developer console for details!');
					console.log('jQuery error object:');
					console.log(err);
				}

				// Adds a row in the HTML table for each item in the given items array.
				function showInTable(items) {
					// Destroy any possible existing content in the table
					var tableBody = $('#table-body');
					tableBody.empty();

					// Generate a row in the table for each item (this code is not very efficient, consider using
					// a templating library such as Knockout.js in real life applications).
					$.each( items, function (i, item) {
						// Construct and store the link for fetching the project's properties later.
						// (See: http://www.m-files.com/mfws/resources/objects/type/objectid/version/properties.html)
						// E.g. "http://localhost/M-Files/REST/objects/101/32/1/properties?forDisplay=true"
						var linkHref = host + '/objects/' + item.ObjVer.Type +'/'+item.ObjVer.ID+ '/latest/files/' + item.Files[0].ID + '/content?auth='+tokeen.Value;
						//http://localhost/M-Files/REST/objects/0/547/latest/files/586/content?auth=" + token.Value
						console.log(linkHref);
						var link = '<a class="documentLink" href="' + linkHref + '">' + item.Title + '</a>';
						console.log(item);




						$.get(host + '/objects/0/' +item.ObjVer.ID+ '/properties?&auth=' + tokeen.Value)
					.done(function(result1) {
						// Simply print the results to the console:
						for(var j=0;j<result1.length;j++){
						if(result1[j].PropertyDef == '1149'){numPI = result1[j].TypedValue.DisplayValue;}
						if(result1[j].PropertyDef == '1147'){numcli = result1[j].TypedValue.DisplayValue;}
						if(result1[j].PropertyDef == '1150'){datesignature = result1[j].TypedValue.DisplayValue;}


						}

						var tableRow = '<tr>'
									+ '<td class="">' + link + '</td>'
									+ '<td>' + datesignature + '</td>'
									+ '<td class="hidden-480">' + numcli + '</td>'
									+ '<td>' + numPI + '</td>'
									+ '<td> <a href="http://localhost:1234/ace/traitement.php?iddoc='+ item.ObjVer.ID+'" > acceder </a> </td>'
									+ '</tr> ';
						tableBody.append(tableRow);




					})
					.fail(processError);

















						// Create and append a row for each project in the HTML table

					});

					// Register a click handler for each link in the table
					$('.projectLink').click(projectClicked);
				}

				// Called when a project in the search result list is clicked
				function projectClicked(evt) {
					// Prevent the default link click behaviour and make an AJAX call instead to fetch the project's details.
					evt.preventDefault();
					// E.g. "http://localhost/M-Files/REST/objects/101/32/1/properties?forDisplay=true"
					$.get(this.href)
						.done(function(data) {
							console.log(JSON.stringify(data, null, 2));
						})
						.fail(processError);
				}
				});
		</script>
	</body>
</html>

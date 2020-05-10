<!DOCTYPE html>

<?php
session_start();





		$_SESSION['NOM_AUTH'] = $_POST['username'];
		$_SESSION['PASSWORD'] = $_POST['password'];




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
							<a href="../../../public/ace/images/gallery/log.png" title="Photo Title" data-rel="colorbox" class="cboxElement">
												<img width="100" height="100" alt="100x100" src="../../../public/ace/images/gallery/log.png">
											</a>
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
					<li class="active">
						<a href="accuei.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Accueil </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="CNT.php" >
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Gérer les contrats NT
							</span>


						</a>

						<b class="arrow"></b>


					</li>

					<li class="">
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
						<a href="#">
							<i class="menu-icon fa fa-calendar"></i>

							<span class="menu-text">
								Voir les contrats H


							</span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#">
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
								Accueil

							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">

							<div class="col-xs-3"><a href="#" class="btn btn-default btn-app radius-4">
											<i class="ace-icon fa fa-cog bigger-240"></i>
											Contrats de la veille
											<span class="badge badge-pink">+3</span>
										</a>
										</div>
										<div class="col-xs-3">
										<a href="CNT.php" class="btn btn-default btn-app radius-4">
											<i class="ace-icon fa fa-cog bigger-240"></i>
											Contrats Non Traités
											<span class="badge badge-pink">+3</span>
										</a>
										</div>
										<div class="col-xs-3">
										<a href="CEC.php" class="btn btn-default btn-app radius-4">
											<i class="ace-icon fa fa-cog bigger-240"></i>
											Contrats en cours <br> de traitement
											<span class="badge badge-pink">+3</span>
										</a>
										</div>
										<div class="col-xs-3">
										<a href="#" class="btn btn-default btn-app radius-4">
											<i class="ace-icon fa fa-cog bigger-240"></i>
											Contrats en relance
											<span class="badge badge-pink">+3</span>
										</a>

										</div>


										<div class="col-xs-3">

										<a href="#" class="btn btn-default btn-app radius-4">
											<i class="ace-icon fa fa-cog bigger-240"></i>
											Contrats Homologués
											<span class="badge badge-pink">+3</span>
										</a>

									</div>

											<div class="col-xs-3">

										<a href="#" class="btn btn-default btn-app radius-4">
											<i class="ace-icon fa fa-cog bigger-240"></i>
											Contrats <br>Non Homologués
											<span class="badge badge-pink">+3</span>
										</a>

									</div>
											<div class="col-xs-3">

										<a href="#" class="btn btn-default btn-app radius-4">
											<i class="ace-icon fa fa-cog bigger-240"></i>
											Rechercher <br> un contrat
											<span class="badge badge-pink">+3</span>
										</a>

									</div>
											<div class="col-xs-3">

										<a href="#" class="btn btn-default btn-app radius-4">
											<i class="ace-icon fa fa-pencil-square-o bigger-230"></i>
											Export
											<span class="badge badge-pink">+3</span>
										</a>

									</div>










								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
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

		<!--[if lte IE 8]>
        <script src="../../../public/ace/js/excanvas.min.js"></script>
        <![endif]-->
		<script src="../../../public/ace/js/jquery-ui.custom.min.js"></script>
		<script src="../../../public/ace/js/jquery.ui.touch-punch.min.js"></script>
		<script src="../../../public/ace/js/jquery.easypiechart.min.js"></script>
		<script src="../../../public/ace/js/jquery.sparkline.index.min.js"></script>
		<script src="../../../public/ace/js/jquery.flot.min.js"></script>
		<script src="../../../public/ace/js/jquery.flot.pie.min.js"></script>
		<script src="../../../public/ace/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="../../../public/ace/js/ace-elements.min.js"></script>
		<script src="../../../public/ace/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">

		</script>
	</body>
</html>

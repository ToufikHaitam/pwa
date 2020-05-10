 
<!DOCTYPE html>
<html lang="en">
 
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Tables - Ace Admin</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{asset('ace/')}}/css/bootstrap.min.css" />
		<link rel="stylesheet" href="{{asset('ace/')}}/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="{{asset('ace/')}}/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{asset('ace/')}}/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="{{asset('ace/')}}/css/chosen.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="{{asset('ace/')}}/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="{{asset('ace/')}}/css/ace-skins.min.css" />
		<link rel="stylesheet" href="{{asset('ace/')}}/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="{{asset('ace/')}}/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="{{asset('ace/')}}/js/ace-extra.min.js"></script>

		<link rel="stylesheet" href="{{asset('ace/')}}/css/bootstrap.min.css" />
		<link rel="stylesheet" href="{{asset('ace/')}}/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="{{asset('ace/')}}/css/jquery-ui.min.css" />

	
		<link rel="stylesheet" href="{{asset('ace/')}}/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{asset('ace/')}}/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		
		<link rel="stylesheet" href="{{asset('ace/')}}/css/ace-skins.min.css" />
		<link rel="stylesheet" href="{{asset('ace/')}}/css/ace-rtl.min.css" />

		<script src="{{asset('ace/')}}/js/ace-extra.min.js"></script>
	</head>

	<body class="no-skin">
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
							Ace Admin
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-check"></i>
									4 Tasks to complete
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Software Update</span>
													<span class="pull-right">65%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:65%" class="progress-bar"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Hardware Upgrade</span>
													<span class="pull-right">35%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:35%" class="progress-bar progress-bar-danger"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Unit Testing</span>
													<span class="pull-right">15%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:15%" class="progress-bar progress-bar-warning"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Bug Fixes</span>
													<span class="pull-right">90%</span>
												</div>

												<div class="progress progress-mini progress-striped active">
													<div style="width:90%" class="progress-bar progress-bar-success"></div>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See tasks with details
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8 Notifications
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
													<span class="pull-right badge badge-info">+12</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<i class="btn btn-xs btn-primary fa fa-user"></i>
												Bob just signed up as an editor ...
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
													<span class="pull-right badge badge-success">+8</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
													<span class="pull-right badge badge-info">+11</span>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									5 Messages
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#" class="clearfix">
												<img src="{{asset('ace/')}}/images/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="{{asset('ace/')}}/images/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="{{asset('ace/')}}/images/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="{{asset('ace/')}}/images/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="{{asset('ace/')}}/images/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="inbox.html">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="{{asset('ace/')}}/images/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
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
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="index.html">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								UI &amp; Elements
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Layouts
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="top-menu.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Top Menu
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="two-menu-1.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Two Menus 1
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="two-menu-2.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Two Menus 2
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="mobile-menu-1.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Default Mobile Menu
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="mobile-menu-2.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Mobile Menu 2
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="mobile-menu-3.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Mobile Menu 3
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>

							<li class="">
								<a href="typography.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Typography
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Elements
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="buttons.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Buttons &amp; Icons
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="content-slider.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Content Sliders
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="treeview.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Treeview
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="jquery-ui.html">
									<i class="menu-icon fa fa-caret-right"></i>
									jQuery UI
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="nestable-list.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Nestable Lists
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Three Level Menu
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="#">
											<i class="menu-icon fa fa-leaf green"></i>
											Item #1
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="#" class="dropdown-toggle">
											<i class="menu-icon fa fa-pencil orange"></i>

											4th level
											<b class="arrow fa fa-angle-down"></b>
										</a>

										<b class="arrow"></b>

										<ul class="submenu">
											<li class="">
												<a href="#">
													<i class="menu-icon fa fa-plus purple"></i>
													Add Product
												</a>

												<b class="arrow"></b>
											</li>

											<li class="">
												<a href="#">
													<i class="menu-icon fa fa-eye pink"></i>
													View Products
												</a>

												<b class="arrow"></b>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Tables </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="active">
								<a href="tables.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Simple &amp; Dynamic
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="jqgrid.html">
									<i class="menu-icon fa fa-caret-right"></i>
									jqGrid plugin
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Forms </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="form-elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Form Elements
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="form-elements-2.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Form Elements 2
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="form-wizard.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Wizard &amp; Validation
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="wysiwyg.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Wysiwyg &amp; Markdown
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="dropzone.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Dropzone File Upload
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="widgets.html">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Widgets </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="calendar.html">
							<i class="menu-icon fa fa-calendar"></i>

							<span class="menu-text">
								Calendar

								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="gallery.html">
							<i class="menu-icon fa fa-picture-o"></i>
							<span class="menu-text"> Gallery </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tag"></i>
							<span class="menu-text"> More Pages </span>


							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="profile.html">
									<i class="menu-icon fa fa-caret-right"></i>
									User Profile
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="inbox.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Inbox
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="pricing.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Pricing Tables
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="invoice.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Invoice
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="timeline.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Timeline
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="search.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Search Results
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="email.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Email Templates
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="login.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Login &amp; Register
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-o"></i>

							<span class="menu-text">
								Other Pages

								<span class="badge badge-primary">5</span>
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="faq.html">
									<i class="menu-icon fa fa-caret-right"></i>
									FAQ
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="error-404.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Error 404
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="error-500.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Error 500
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="grid.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Grid
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="blank.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Blank Page
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Tables</a>
							</li>
							<li class="active">Simple &amp; Dynamic</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Administration
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Gestion des fiches d'hebergements   
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								 
								<meta name="csrf-token" content="{{ csrf_token() }}">
 
								 

 
								<div class="row">
									<div class="col-xs-12">
 
									 
										<div class="table-header">
											La liste des fiches des Hebergements 
										</div><br>

										<center><p>
											<button class="btn btn-white btn-info btn-bold" data-toggle="modal" href="#modal-table"">
												<i class="ace-icon fa fa-plus bigger-120 blue"></i>
												Ajouter une nouvelle Fiche
											</button>

											<button class="btn btn-white btn-warning btn-bold">
												<i class="ace-icon fa fa-refresh -o bigger-120 orange"></i>
												 Synchoronisation 
											</button>

											
										</p></center>
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<a href="#" data-action="reload">
															<i class="ace-icon fa fa-refresh"></i>
														</a>
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>N_fiche</th>
														<th>N_Identite</th>
														<th>Nom et prenom</th>
														<th>Nationalite</th>
														 
														<th class="hidden-480">
														<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
														Date_naissance</th>

														 
 
														<th></th>
													</tr>
												</thead>

												<tbody>

												 
												</tbody>
											</table>
										</div>
									</div>
								</div>

 								<script>

 								</script>

                                   <div id="modal-table" class="modal large" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Results for "Latest Registered Domains
												</div>
											</div>

											<div class="modal-body no-padding">
											
											<div class="col-sm-10">
												<br><br>
												<form   id="form-vaidation" action="test"  >     
			
			
			<div class="alert alert-success d-none" id="msg_div" 
			 >
              <span id="res_message"></span>
		 </div>       
		 

		 <div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
        </div>
     
    <fieldset>
        <div class='row'>
            <div class='col-sm-4'>    
                <div class='form-group'>
                    <label for="user_title">Nom</label>
                    <input class="form-control" id="nom" name="nom" size="30" type="text" />
                </div>
            </div>
            <div class='col-sm-4'>
                <div class='form-group'>
                    <label for="user_firstname">Profession</label>
                    <input class="form-control" id="profession" name="profession" required="true" size="30" type="text" />
                </div>
            </div>
            <div class='col-sm-4'>
                <div class='form-group'>
                    <label for="user_lastname">Pays</label>
                    <input class="form-control" id="pays" name="pays" required="true" size="30" type="text" />
                </div>
            </div>
		</div>
		
        
	</fieldset>
	
	<fieldset>
        <div class='row'>
            <div class='col-sm-4'>    
                <div class='form-group'>
                    <label for="user_title">Date naissance</label>
                    <input class="form-control" id="date_naissance" name="date_naissance" size="30" type="date" />
                </div>
            </div>
            <div class='col-sm-4'>
                <div class='form-group'>
                    <label for="user_firstname">Date Delivrance</label>
                    <input class="form-control" id="date_delivrance" name="date_delivrance" required="true" size="30" type="date" />
                </div>
            </div>
            <div class='col-sm-4'>
                <div class='form-group'>
                    <label for="user_lastname">Nationalite</label>
					<select class="form-control" id="nationalite" name="nationalite_id"></select>      
					            </div>
            </div>
		</div>
		
        
	</fieldset>
	
	<fieldset>
		
		<div class='row'>
		   <div class='col-sm-12'>
			   <div class='form-group'>

			   <label for="user_lastname">Adresse</label>
				   <textarea class="form-control" id="adresse" name="lieu_naissance" required="true" size="30" type="text" ></textarea>
			 
				  
			   </div>
			   
			  
		   </div>
	   </div>
   </fieldset>

	<fieldset>
        <div class='row'>
            <div class='col-sm-2'>    
                <div class='form-group'>
                    <label for="user_title">Num Piece</label>
					<input class="form-control" id="num_piece" name="num_piece" required="true" size="30" type="Number" />
              </div>
            </div>
            <div class='col-sm-2'>
                <div class='form-group'>
                    <label for="user_firstname">sexe</label>
					<select class="form-control" id="sexe" name="sexe_id"></select>        
	         </div>
			</div>
			<div class='col-sm-4'>
                <div class='form-group'>
				<label for="user_locale">Motif</label>
				<select class="form-control" id="motif" name="motif_id">
				 
					</select>                 
				 </div>
            </div>
            <div class='col-sm-4'>
                <div class='form-group' id="radio">
				<label for="user_locale">Type de piece d'idente</label>
					                           
				</div>
			</div>
			
		
		
        
    </fieldset>
    <fieldset>
		
         
				
               <center>                    <p>
											<button class="btn btn-white btn-info btn-bold" type="submit" id="send_form">
												<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
												Enregistre
											</button>

											<button class="btn btn-white btn-warning btn-bold">
												<i class="ace-icon fa fa-trash-o bigger-120 orange"></i>
												Delete
											</button>

											<button class="btn btn-white btn-default btn-round"  data-dismiss="modal">
												<i class="ace-icon fa fa-times red2"></i>
												Quitte
											</button>
										</p></center>    
           
    </fieldset>
</form>

																						
											



										 
											</div>
											<div class="modal-footer no-margin-top">
												 
 
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>






								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->





			<button ondblclick="fnClickAddRow()"> 
                Add Row 
            </button> 
            
              <script> 





                 var count = 1;
 
 $(document).ready(function() {
     $('#dynamic-table').dataTable();
 } );
  
 function fnClickAddRow() {
	 load();
     $('#dynamic-table').dataTable().fnAddData(  [

		'<td class="center"><label class="pos-rel"><input type="checkbox" class="ace" /><span class="lbl"></span></label>	</td>',
      '	<td><a href="#">fiche->nom</a></td>',
	  ' <td><a href="#">fiche->nom</a>	</td>',' <td><a href="#">fiche->nom</a>	</td>',
'<td><div class="hidden-sm hidden-xs action-buttons"><a class="blue"   data-toggle="modal" href="#modal-table"<i class="ace-icon fa fa-search-plus bigger-130"></i></a><a class="green" href="#"><i class="ace-icon fa fa-pencil bigger-130"></i></a><a class="red" href="#"><i class="ace-icon fa fa-trash-o bigger-130"></i></a></div><div class="hidden-md hidden-lg"><div class="inline pos-rel"><button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto"><i class="ace-icon fa fa-caret-down icon-only bigger-120"></i></button><ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close"><li><a href="#" class="tooltip-info" data-rel="tooltip" title="View"><span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a></li><li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit"><span class="green"><i class="ace-icon fa fa-pencil-square-o bigger-120"></i>	</span></a></li><li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="ace-icon fa fa-trash-o bigger-120"></i>	</span></a></li></ul></div></div></td>' ] );
      
     giCount++;
 }
  



              </script> 
          



		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
$(document).ready(function() {
    load();
 } );
         function load(){
			
			var table = $('#dynamic-table').DataTable();
 
table
    .clear()
    .draw();
            $.ajax({
                type: "GET",
                url: "/fichehebergements",
                
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (msg) {
               // console.log(msg);
					 
					
                    $.each(msg, function (index, obj) { 
						
						$('#dynamic-table').dataTable().fnAddData(  [

						'<td class="center" class="odd selected"><label class="pos-rel"><button class="btn btn-xs btn-success" ><i class="ace-icon fa fa-lock bigger-120"></i></button><span class="lbl"></span></label>	</td>',
						'	<td><a href="#">' + obj.id+ '</a></td>',
						'	<td><a href="#">' + obj.num_piece+ '</a></td>',
						' <td><a href="#">' + obj.nom+ '</a>	</td>',' <td><a href="#">' + obj.pays+ '</a>	</td>',
						' <td><a href="#">'+obj.date_naissance+'</a>	</td>',
						'<td> <div class="hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-success" ><i class="ace-icon fa fa-check bigger-120"></i></button><button class="btn btn-xs btn-info" data-toggle="modal" href="#modal-table"  onclick="update('+obj.id+')" ><i class="ace-icon fa fa-pencil bigger-120"></i></button><button class="btn btn-xs btn-danger" id="id-btn-dialog2"  onclick="deleteRecord('+obj.id+')" data-id=""><i class="ace-icon fa fa-trash-o bigger-120"></i></button><button class="btn btn-xs btn-warning"><i class="ace-icon fa fa-flag bigger-120"></i></button></div></td>',
						] );

                        var row = '<tr><td> ' + obj.nom+ ' </td> <td> ' + obj.p_name + ' </td> <td>' + obj.p_mobile + '</td> <td>' + obj.p_location + '</td> </tr>'
					  // console.log(row);
						$("#tbDetails tbody").append(row);
                    }); 
                }
            });

		 }


        
    </script>
          






<script>


function deleteRecord(id){
	
	 
    var token = $("meta[name='csrf-token']").attr("content");
  
	$.ajax(
        {
          url: "/fichehebergement/"+id, //or you can use url: "company/"+id,
          type: 'DELETE',
          data: {
            _token: token,
                id: id
        },
        success: function (response){

            load();

           
        }
     });
      return false;
   
   
};
</script>



<script>


$(document).ready(function(){



	$.ajax({
		url: 'nationalites',
		type: 'GET',
		
		dataType: 'json',
		success:function(response){

		//	console.log(response)
			var len = response.length;

			$("#nationalite").empty();
			for( var i = 0; i<len; i++){
				var id = response[i]['id'];
				var nationalite = response[i]['nationalite'];
			 
				$("#nationalite").append("<option value='"+id+"'>"+nationalite+"</option>");

			}
		}
	});




	$.ajax({
		url: 'sexes',
		type: 'GET',
		
		dataType: 'json',
		success:function(response){

			//console.log(response)
			var len = response.length;

			$("#sexe").empty();
			for( var i = 0; i<len; i++){
				var id = response[i]['id'];
				var sexe = response[i]['sexe'];
			 
				$("#sexe").append("<option value='"+id+"'>"+sexe+"</option>");

			}
		}
	});



	$.ajax({
		url: 'motifs',
		type: 'GET',
		
		dataType: 'json',
		success:function(response){

			console.log(response)
			var len = response.length;

			$("#motif").empty();
			for( var i = 0; i<len; i++){
				var id = response[i]['id'];
				var motif = response[i]['motif'];
			 
				$("#motif").append("<option value='"+id+"'>"+motif+"</option>");

			}
		}
	});




	
	$.ajax({
		url: 'typedepieces',
		type: 'GET',
		
		dataType: 'json',
		success:function(response){

			console.log(response)
			var len = response.length;

			$("#radio").empty();
			for( var i = 0; i<len; i++){
				var id = response[i]['id'];
				var type = response[i]['piece'];
			 
				$("#radio").append('<div class="radio"><label><input name="type_piece_id"  value="'+id+'" type="radio" class="ace"><span class="lbl" > '+type+'</span></label></div>');

			}
		}
	});


});
	 




</script>






// add fiche 

<script>
//-----------------
$(document).ready(function(){
$('#send_form').click(function(e){
   e.preventDefault();
   /*Ajax Request Header setup*/
   $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

   $('#send_form').html('Sending..');
   /* Submit form data using ajax*/
   $.ajax({
      url: "{{ url('fichehebergement')}}",
      method: 'POST',
      data: $('#form-vaidation').serialize(),
      success: function(response){
       console.log(response)
		 //------------------------
		 

		 if($.isEmptyObject(response.error)){
			$('#send_form').html('Submit');
            $('#alert-success').css('display','block');
            $('#res_message').html(response.msg);
            //$('#msg_div').removeClass('d-none');

             document.getElementById("form-vaidation").reset(); 
            setTimeout(function(){
            $('#res_message').hide();
            $('#msg_div').hide();
			},10000);
			
			load();
					}
					
			else{
				
				
				$(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( response.error, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');});
				setTimeout(function(){
           	$(".print-error-msg").css('display','none');

			
			},10000);
			
			

			
				   
					
					}
           
         //--------------------------
	  }
	
	
	
	});
	  
 
   });
});
//-----------------
</script>




<script>

	function update(obj){
		console.log(obj)
		$.ajax({
		url: 'fichehebergement/'+obj,
		type: 'GET',
		
		dataType: 'json',
		success:function(response){

			console.log(response)

			var d=new Date(response.date_naissance);
			//alert(d.getDay()+"/"+d.getMonth()+"/"+d.getFullYear())
 			$('#date_delivrance').val(d.getFullYear()+""+d.getDay()+"-"+d.getMonth());
 			$('#nationalite').val(3).change()
			$("#motif").val(response.motif_id).change();
 			$("#sexe").val(response.sexe_id).change(); 
			$("input[name=type_piece_id][value=" + response.type_piece_id + "]").prop('checked', true);

			$('#nom').val(response.nom);
			$('#profession').val(response.profession);
			$('#num_piece').val(response.num_piece);
			$('#pays').val(response.pays);
			$('#adresse').val(response.lieu_naissance);
			$('#date_naissance').val(response.date_naissance);
			
            
			




		}
	});

	}
</script>




































 


			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
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
		<script src="{{asset('ace/')}}/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="{{asset('ace/')}}/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='{{asset('ace/')}}/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="{{asset('ace/')}}/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="{{asset('ace/')}}/js/jquery.dataTables.min.js"></script>
		<script src="{{asset('ace/')}}/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="{{asset('ace/')}}/js/dataTables.buttons.min.js"></script>
		<script src="{{asset('ace/')}}/js/buttons.flash.min.js"></script>
		<script src="{{asset('ace/')}}/js/buttons.html5.min.js"></script>
		<script src="{{asset('ace/')}}/js/buttons.print.min.js"></script>
		<script src="{{asset('ace/')}}/js/buttons.colVis.min.js"></script>
		<script src="{{asset('ace/')}}/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="{{asset('ace/')}}/js/ace-elements.min.js"></script>
		<script src="{{asset('ace/')}}/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [[ 1, "desc" ]],
					
					//"order": [[ 3, "desc" ]],
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "fichehebergement"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>




















	
<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
							
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="ace-icon fa fa-list-alt smaller-90"></i>
											Dialogs
										</h3>
										<a href="#" id="id-btn-dialog2" class="btn btn-info btn-sm">Confirm Dialog</a>
										<a href="#" id="id-btn-dialog1" class="btn btn-purple btn-sm">Modal Dialog</a>

										<div id="dialog-message" class="hide">
											<p>
												This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.
											</p>

											<div class="hr hr-12 hr-double"></div>

											<p>
												Currently using
												<b>36% of your storage space</b>.
											</p>
										</div><!-- #dialog-message -->

										<div id="dialog-confirm" class="hide">
											<div class="alert alert-info bigger-110">
												These items will be permanently deleted and cannot be recovered.
											</div>

											<div class="space-6"></div>

											<p class="bigger-110 bolder center grey">
												<i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
												Are you sure?
											</p>
										</div><!-- #dialog-confirm -->
									</div><!-- ./span -->
								</div> 

<script src="{{asset('ace/')}}/js/jquery-ui.min.js"></script>

<script type="text/javascript">
	jQuery(function($) {



		//override dialog's title function to allow for HTML titles
		$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
			_title: function(title) {
				var $title = this.options.title || '&nbsp;'
				if( ("title_html" in this.options) && this.options.title_html == true )
					title.html($title);
				else title.text($title);
			}
		}));

		$( "#id-btn-dialog1" ).on('click', function(e) {
			e.preventDefault();

			var dialog = $( "#dialog-message" ).removeClass('hide').dialog({
				modal: true,
				title: "<div class='widget-header widget-header-small'><h4 class='smaller'><i class='ace-icon fa fa-check'></i> jQuery UI Dialog</h4></div>",
				title_html: true,
				buttons: [
					{
						text: "Cancel",
						"class" : "btn btn-minier",
						click: function() {
							$( this ).dialog( "close" );
						}
					},
					{
						text: "OK",
						"class" : "btn btn-primary btn-minier",
						click: function() {
							$( this ).dialog( "close" );
						}
					}
				]
			});

			/**
			dialog.data( "uiDialog" )._title = function(title) {
				title.html( this.options.title );
			};
			**/
		});


		$( "#id-btn-dialog2" ).on('click', function(e) {
			e.preventDefault();

			$( "#dialog-confirm" ).removeClass('hide').dialog({
				resizable: false,
				width: '320',
				modal: true,
				title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Empty the recycle bin?</h4></div>",
				title_html: true,
				buttons: [
					{
						html: "<i class='ace-icon fa fa-trash-o bigger-110'></i>&nbsp; Delete all items",
						"class" : "btn btn-danger btn-minier",
						click: function() {
							$( this ).dialog( "confirme" );
						}
					}
					,
					{
						html: "<i class='ace-icon fa fa-times bigger-110'></i>&nbsp; Cancel",
						"class" : "btn btn-minier",
						click: function() {
							$( this ).dialog( "close" );
						}
					}
				]
			});
		});



		//autocomplete
		 var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];
		$( "#tags" ).autocomplete({
			source: availableTags
		});

		//custom autocomplete (category selection)
		$.widget( "custom.catcomplete", $.ui.autocomplete, {
			_create: function() {
				this._super();
				this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
			},
			_renderMenu: function( ul, items ) {
				var that = this,
				currentCategory = "";
				$.each( items, function( index, item ) {
					var li;
					if ( item.category != currentCategory ) {
						ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
						currentCategory = item.category;
					}
					li = that._renderItemData( ul, item );
						if ( item.category ) {
						li.attr( "aria-label", item.category + " : " + item.label );
					}
				});
			}
		});

		 var data = [
			{ label: "anders", category: "" },
			{ label: "andreas", category: "" },
			{ label: "antal", category: "" },
			{ label: "annhhx10", category: "Products" },
			{ label: "annk K12", category: "Products" },
			{ label: "annttop C13", category: "Products" },
			{ label: "anders andersson", category: "People" },
			{ label: "andreas andersson", category: "People" },
			{ label: "andreas johnson", category: "People" }
		];
		$( "#search" ).catcomplete({
			delay: 0,
			source: data
		});


		//tooltips
		$( "#show-option" ).tooltip({
			show: {
				effect: "slideDown",
				delay: 250
			}
		});

		$( "#hide-option" ).tooltip({
			hide: {
				effect: "explode",
				delay: 250
			}
		});

		$( "#open-event" ).tooltip({
			show: null,
			position: {
				my: "left top",
				at: "left bottom"
			},
			open: function( event, ui ) {
				ui.tooltip.animate({ top: ui.tooltip.position().top + 10 }, "fast" );
			}
		});


		//Menu
		$( "#menu" ).menu();


		//spinner
		var spinner = $( "#spinner" ).spinner({
			create: function( event, ui ) {
				//add custom classes and icons
				$(this)
				.next().addClass('btn btn-success').html('<i class="ace-icon fa fa-plus"></i>')
				.next().addClass('btn btn-danger').html('<i class="ace-icon fa fa-minus"></i>')

				//larger buttons on touch devices
				if('touchstart' in document.documentElement)
					$(this).closest('.ui-spinner').addClass('ui-spinner-touch');
			}
		});

		//slider example
		$( "#slider" ).slider({
			range: true,
			min: 0,
			max: 500,
			values: [ 75, 300 ]
		});



		//jquery accordion
		$( "#accordion" ).accordion({
			collapsible: true ,
			heightStyle: "content",
			animate: 250,
			header: ".accordion-header"
		}).sortable({
			axis: "y",
			handle: ".accordion-header",
			stop: function( event, ui ) {
				// IE doesn't register the blur when sorting
				// so trigger focusout handlers to remove .ui-state-focus
				ui.item.children( ".accordion-header" ).triggerHandler( "focusout" );
			}
		});
		//jquery tabs
		$( "#tabs" ).tabs();


		//progressbar
		$( "#progressbar" ).progressbar({
			value: 37,
			create: function( event, ui ) {
				$(this).addClass('progress progress-striped active')
					   .children(0).addClass('progress-bar progress-bar-success');
			}
		});


		//selectmenu
		 $( "#number" ).css('width', '200px')
		.selectmenu({ position: { my : "left bottom", at: "left top" } })

	});
</script>
	</body>
</html>

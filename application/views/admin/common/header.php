<?php if($this->uri->segment(1) == 'status'){ ?>

	<!DOCTYPE html>
	<html lang="en">
		<head>
			<!------------------>
			<!-- META CONTENT -->
			<!------------------>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
			<meta name="apple-mobile-web-app-capable" content="yes">
			<meta name="apple-touch-fullscreen" content="yes">
			<meta name="description" content="Lillian Montalto Signature Properties Status Page">
			<meta name="author" content="Lillian Montalto">

			<!---------------->
			<!-- PAGE TITLE -->
			<!---------------->
			<title>Lillian Montalto Signature Properties - Listing Status</title>

			<!----------------->
			<!-- TAB FAVICON -->
			<!----------------->
			<link rel="shortcut icon" href="<?=ASSETS_ADMIN_DIR?>img/favicon.png">

			<!------------------------------>
			<!-- GLOBAL CSS CONFIGURATION -->
			<!------------------------------>
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>css/master.css">
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>css/lightgallery.min.css">
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>plugins/iview/css/skin/style.css">
			<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>fonts/font-awesome/css/font-awesome.min.css">
		</head>
	
<?php }elseif($this->uri->segment(2) == ''){ ?>

	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			
			<!---------------->
			<!-- PAGE TITLE -->
			<!---------------->
			
			<!-- Login, Code & Status TITLE -->
			<?php if($this->uri->segment(1) == 'admin'){ ?>
				<title>Lillian Montalto Signature Properties Admin Control Panel - Login</title>
			<?php }elseif($this->uri->segment(1) == 'code'){ ?>
				<title>Lillian Montalto Signature Properties Admin Control Panel - Listing Code</title>
			<?php } ?>
			
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
			<meta name="apple-mobile-web-app-capable" content="yes">
			<meta name="apple-touch-fullscreen" content="yes">
			<meta name="author" content="KaijuThemes">
			
			<link type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>
			<link type='text/css'  href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
			<link href="<?=ASSETS_ADMIN_DIR?>plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">
			
			<!-- Skylo -->
			<link href="<?=ASSETS_ADMIN_DIR?>fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
			<link href="<?=ASSETS_ADMIN_DIR?>css/styles.css" type="text/css" rel="stylesheet">
			
			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
			<!--[if lt IE 9]>
			<link href="<?=ASSETS_ADMIN_DIR?>css/ie8.css" type="text/css" rel="stylesheet">
			<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->

			<style>
			#topnav {
				z-index: 1;
			}
			</style>
		</head>

<?php }else{ ?>

	<!DOCTYPE html>
	<html lang="en">
		<head>
			<!------------------>
			<!-- META CONTENT -->
			<!------------------>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
			<meta name="apple-mobile-web-app-capable" content="yes">
			<meta name="apple-touch-fullscreen" content="yes">
			<meta name="description" content="Lillian Montalto Signature Properties Admin Control Panel">
			<meta name="author" content="Lillian Montalto">
			
			<!---------------->
			<!-- PAGE TITLE -->
			<!---------------->
			
			<!-- Listings TITLE -->
			<?php if($this->uri->segment(2) == 'listings'){ ?>
				<title>Lillian Montalto Signature Properties Admin Control Panel - Listings</title>
			<?php }elseif($this->uri->segment(2) == 'add_listing'){ ?>
				<title>Lillian Montalto Signature Properties Admin Control Panel - Add New Listing</title>
			<?php }elseif($this->uri->segment(2) == 'edit_listing'){ ?>
				<title>Lillian Montalto Signature Properties Admin Control Panel - Update Listing Info</title>
				
			<!-- Agents TITLE -->
			<?php }elseif($this->uri->segment(2) == 'agents'){ ?>
				<title>Lillian Montalto Signature Properties Admin Control Panel - Agents</title>
			<?php }elseif($this->uri->segment(2) == 'add_agent'){ ?>
				<title>Lillian Montalto Signature Properties Admin Control Panel - Add New Agent</title>
			<?php }elseif($this->uri->segment(2) == 'edit_agent'){ ?>
				<title>Lillian Montalto Signature Properties Admin Control Panel - Update Agent Info</title>
				
			<!-- Steps TITLE -->
			<?php }elseif($this->uri->segment(2) == 'listing_steps'){ ?>
				<title>Lillian Montalto Signature Properties Admin Control Panel - Listing Steps</title>
			<?php }elseif($this->uri->segment(2) == 'add_step'){ ?>
				<title>Lillian Montalto Signature Properties Admin Control Panel - Add New Listing Step</title>
			<?php }elseif($this->uri->segment(2) == 'edit_step'){ ?>
				<title>Lillian Montalto Signature Properties Admin Control Panel - Update Listing Step Info</title>
			<?php } ?>
			
			<!----------------->
			<!-- TAB FAVICON -->
			<!----------------->
			<link rel="shortcut icon" href="<?=ASSETS_ADMIN_DIR_IMG?>favicon.png">

			<!------------------>
			<!-- CUSTOM FONTS -->
			<!------------------>
			<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500">

			<!------------------------->
			<!-- CUSTOM VECTOR ICONS -->
			<!------------------------->
			<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>fonts/font-awesome/css/font-awesome.min.css">

			<!------------------------------>
			<!-- GLOBAL CSS CONFIGURATION -->
			<!------------------------------>
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>css/lightgallery.min.css">
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>plugins/codeprettifier/prettify.css">
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>plugins/dropdown.js/jquery.dropdown.css">
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>plugins/progress-skylo/skylo.css">

			<!------------------------------------------->
			<!-- SKYLO - THE LOADER ON TOP OF THE PAGE -->
			<!------------------------------------------->
			<!--[if lt IE 10]>
			<script src="<?=ASSETS_ADMIN_DIR?>js/media.match.min.js"></script>
			<script src="<?=ASSETS_ADMIN_DIR?>js/respond.min.js"></script>
			<script src="<?=ASSETS_ADMIN_DIR?>js/placeholder.min.js"></script>
			<![endif]-->

			<!----------------->
			<!-- CSS PLUGINS -->
			<!----------------->
			<!-- The following CSS files are included as plugins and can be removed if unused -->
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>plugins/form-daterangepicker/daterangepicker-bs3.css">
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>plugins/fullcalendar/fullcalendar.css">
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>plugins/jvectormap/jquery-jvectormap-2.0.2.css">
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>plugins/chartist/dist/chartist.min.css">
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>plugins/datatables/dataTables.bootstrap.css">
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>plugins/datatables/dataTables.themify.css">
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>plugins/gridforms/gridforms/gridforms.css">
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>plugins/dropzone/css/dropzone.css">
			<link href="<?=ASSETS_ADMIN_DIR?>plugins/summernote/dist/summernote.css" type="text/css" rel="stylesheet">
			<link href="<?=ASSETS_ADMIN_DIR?>css/jquery-ui.css" rel="stylesheet" type="text/css" />							<!-- JQuery UI Autocomplete Search -->
			<link rel="stylesheet" href="<?=ASSETS_ADMIN_DIR?>css/styles.css">
			
			<style>  
				.DelBtn{margin-top:1px; height:35px;}
				#topnav {
					z-index: 1;
				}
				.delete-link {
				  margin-top: 10px;
				}
			</style>
		</head>
		
		<body class="animated-content infobar-overlay">
			<!------------------------>
			<!-- TOP NAVIGATION BAR -->
			<!------------------------>
			<header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">

				<!------------------>
				<!-- LOGO CONTENT -->
				<!------------------>
				<div class="logo-area">

					<!--------------------->
					<!-- BRAND/LOGO AREA -->
					<!--------------------->
					<a class="navbar-brand navbar-brand-primary" href="<?php echo base_url(); ?>admin">
						<img class="show-on-collapse img-logo-white" alt="Paper" src="<?=ASSETS_ADMIN_DIR_IMG?>logo-collapsed.png">
						<img class="img-white" alt="Paper" src="<?=ASSETS_ADMIN_DIR_IMG?>logo.png">
					</a>

					<!--------------------------------------->
					<!-- COLLAPSING LEFT NAVIGATION BUTTON -->
					<!--------------------------------------->
					<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg stay-on-search">
						<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
							<span class="icon-bg">
								<i class="material-icons">menu</i>
							</span>
						</a>
					</span>

					<!----------------------------------->
					<!-- BUTTON FOR SEARCH INPUT FIELD -->
					<!----------------------------------->
					<span id="trigger-search" class="hidden toolbar-trigger toolbar-icon-bg ov-h">
						<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
							<span class="icon-bg">
								<i class="material-icons">search</i>
							</span>
						</a>
					</span>

					<!--------------------------------------------------->
					<!-- SEARCH INPUT FIELD WHEN THE BUTTON IS CLICKED -->
					<!--------------------------------------------------->
					<div id="search-box" class="hidden">
						
						<!-- Search Listings -->
						<?php if($this->uri->segment(2) == 'listings' OR $this->uri->segment(2) == 'add_listing' OR $this->uri->segment(2) == 'edit_listing'){ ?>
						<form action="<?php echo base_url();?>admin/search_listing" method="POST">
							<input class="form-control" type="text" name="listings" placeholder="Search Listings" id="search-input">
							<ul>
								<div id="result"></div>
							</ul>
						</form>
						
						<!-- Search Agents -->
						<?php }elseif($this->uri->segment(2) == 'agents' OR $this->uri->segment(2) == 'add_agent' OR $this->uri->segment(2) == 'edit_agent'){ ?>
						<form action="<?php echo base_url();?>admin/search_agent" method="POST">
							<input class="form-control" type="text" name="agents" placeholder="Search Agents" id="id">
							<ul>
								<div id="result"></div>
							</ul>
						</form>
						<?php } ?>
					</div>
					
				</div> <!-- end .logo-area -->

				<!--------------------------------->
				<!-- RIGHT NAVIGATION MENU ITEMS -->
				<!--------------------------------->
				<ul class="nav navbar-nav toolbar pull-right">

					<!---------------------------------------->
					<!-- CLOSE BUTTON WHEN SEARCH IS OPENED -->
					<!---------------------------------------->
					<li class="toolbar-icon-bg appear-on-search ov-h" id="trigger-search-close">
						<a class="toggle-fullscreen">
							<span class="icon-bg">
								<i class="material-icons">close</i>
							</span>
						</a>
					</li>

					<!-------------------------->
					<!-- GO FULLSCREEN BUTTON -->
					<!-------------------------->
					<li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen" data-toggle="tooltip" data-placement="bottom" title="Go fullscreen">
						<a href="#" class="toggle-fullscreen">
							<span class="icon-bg">
								<i class="material-icons">fullscreen</i>
							</span>
						</a>
					</li>

					<!------------->
					<!-- LOG OUT -->
					<!------------->
					<li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen" data-toggle="tooltip" data-placement="bottom" title="Log out">
						<a href="<?php echo base_url(); ?>admin/logout" class="toggle-fullscreen">
							<span class="icon-bg">
								<i class="material-icons">power_settings_new</i>
							</span>
						</a>
					</li>

				</ul> <!-- end .nav -->

			</header> <!-- end #topnav -->
			
			<!------------------------------------------->
			<!-- MAIN CONTENT AND LEFT SIDEBAR WRAPPER -->
			<!------------------------------------------->
			<div id="wrapper">
				<div id="layout-static">

					<!-------------------------->
					<!-- LEFT SIDEBAR CONTENT -->
					<!-------------------------->
					<div class="static-sidebar-wrapper sidebar-blue">
						<div class="static-sidebar">
							<div class="sidebar">

								<!-------------------->
								<!-- BANNER CONTENT -->
								<!-------------------->
								<div class="widget" id="widget-profileinfo">
									<div class="widget-body">
										<div class="userinfo ">

											<div class="avatar pull-left">
												<img src="<?=ASSETS_ADMIN_DIR?>demo/avatar/avatar_15.png" class="img-responsive img-circle">
											</div>

											<div class="info">
												<span class="banner-header">Lillian Montalto</span>
												<span class="banner-subheader">Admin Control Panel</span>
											</div>

										</div>
									</div>
								</div>

								<!------------------>
								<!-- LEFT SIDEBAR -->
								<!------------------>
								<div class="widget stay-on-collapse" id="widget-sidebar">
									<nav role="navigation" class="widget-body">
										<ul class="acc-menu">

											<li class="nav-separator"><span>Navigation</span></li>
											<li <?php if($this->uri->segment(2) == 'listings' OR $this->uri->segment(2) == 'add_listing' OR $this->uri->segment(2) == 'edit_listing')
											{ ?>class="active"<?php }else{ echo ""; } ?>>
												<a class="withripple" href="<?php echo base_url(); ?>admin">
													<span class="icon">
														<i class="material-icons">home</i>
													</span><span>All Listings</span>
												</a>
											</li>
											<li <?php if($this->uri->segment(2) == 'listing_steps' OR $this->uri->segment(2) == 'add_step' OR $this->uri->segment(2) == 'edit_step')
											{ ?>class="active"<?php }else{ echo ""; } ?>>
												<a class="withripple" href="<?php echo base_url(); ?>admin/listing_steps">
													<span class="icon">
														<i class="material-icons">apps</i>
													</span><span>Listing Steps</span>
												</a>
											</li>
											<li <?php if($this->uri->segment(2) == 'agents' OR $this->uri->segment(2) == 'add_agent' OR $this->uri->segment(2) == 'edit_agent')
											{ ?>class="active"<?php }else{ echo ""; } ?>>
												<a class="withripple" href="<?php echo base_url(); ?>admin/agents">
													<span class="icon">
														<i class="material-icons">account_box</i>
													</span><span>Agents</span>
												</a>
											</li>
										</ul>
									</nav> <!-- end .widget-body -->
								</div> <!-- end .widget -->
							</div> <!-- end .sidebar -->
						</div> <!-- end .static-sidebar -->
					</div> <!-- end .static-sidebar-wrapper -->
<?php } ?>
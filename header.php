<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/site.webmanifest" rel="manifest">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
		
		<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
  		<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
		
	</head>
	<body <?php body_class(); ?>>

			<!-- wrapper -->
				<div class="container-page">
				<div class="container-pagecontent">
				<!-- header -->
					<div class="container-header">
						<header>
          				<div class="container-headerinner">
							<div class="container-topbar">
							<div class="container-topmenu">
							  <div class="topmenu">
							  </div>
							</div>
							<!-- logo -->
						    <div class="container-logo">
							  <div id="logo">
								<a href="<?php echo home_url(); ?>">
								  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
								</a>
							  </div>
							  <div id="headertext" class="hidden">
								Where Deep Roots Begin
							  </div>
							</div>
							<!-- /logo -->
		
        				    <div class="container-headercontact">
				              <div id="headercontact">
                				<img src="https://www.placecage.com/25/25" alt="">
        						</div>	
            				</div>
          				</div> <!--End header top bar -->

					<!-- nav -->
					<div class="container-nav">
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
					</div>	
					<!-- /nav -->
				</div> <!--container-headerinner-->
			</header>
			</div> <!-- container-header-->
			<!-- /header -->

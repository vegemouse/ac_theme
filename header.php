<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper" id="top">

			<!-- header -->
			<header id="header" role="banner">
				<h1 class="logo">
					<a href="<?php echo get_home_url() ?>">
						<?php echo get_bloginfo('name'); ?>
					</a>
				</h1>
				<!-- nav -->
				<nav class="nav" role="navigation">
					<?php html5blank_nav(); ?>
					<aside class="social">
						<a href="https://twitter.com/alexrCady"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.png" alt="Follow me on Twitter"></a>
						<a href="https://www.instagram.com/alexrcady/"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.png" alt="Find me on Instagram"></a>
						<a href="https://www.linkedin.com/in/alexander-cady-2b6825137/"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/linkedin.png" alt="Find me on LinkedIn"></a>
					</aside>
				</nav>
				<!-- /nav -->

				<img id="menubutton" class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/left.png" alt="Open Menu">


			</header>
			<!-- /header -->

			<!-- mobile nav -->
			<nav id="mobilemenu" class="mobilemenu" role="navigation">
				<img id="closemenubutton" class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/close.png" alt="Close Menu">
				<?php html5blank_nav(); ?>
				<aside class="social-mobile">
					<a href="https://twitter.com/alexrCady"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.png" alt="Follow me on Twitter"></a>
					<a href="https://www.instagram.com/alexrcady/"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.png" alt="Find me on Instagram"></a>
					<a href="https://www.linkedin.com/in/alexander-cady-2b6825137/"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/linkedin.png" alt="Find me on LinkedIn"></a>
				</aside>
			</nav>
			<!-- /nav -->

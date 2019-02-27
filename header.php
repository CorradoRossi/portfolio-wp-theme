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

	<div class="container body-container h7">
	<section class="columns navvy">
	  <div class="col-1"></div>
	<header class="col-10 navbar m-2">
	  <section class="navbar-section">
	  </section>
	  <section class="navbar-center">
	    <a href="https://motorossi.me"><img src="<?php echo get_template_directory_uri(); ?>/img/name/nav-name-pr.svg" alt="" class="nav-name float-right show-xs"></a>
	  </section>
	  <section class="navbar-section">
	    <a href="mailto:rossimeacham@gmail.com" class="btn btn-link">email</a>
	    <a href="https://linkedin.com/in/rossimeacham" class="btn btn-link">linkedin</a>
	    <a href="https://twitter.com/moto__rossi" class="btn btn-link">twitter</a>
	    <a href="https://github.com/corradorossi" class="btn btn-link">github</a>
	    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/name/nav-name-pr.svg" alt="" class="nav-name float-right hide-xs"></a>
	  </section>
	</header>
	<div class="col-1"></div>
	</section>

		<!-- wrapper -->
		<!--div class="wrapper">

			<header class="header clear" role="banner">

					<div class="logo">
						<a href="<!?php echo home_url(); ?>"-->
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<!--img src="<!?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>

					<nav class="nav" role="navigation">
						<!?php html5blank_nav(); ?>
					</nav>

			</header-->

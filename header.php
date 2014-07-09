<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

	<!-- Remy Sharp Shim -->
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Style link -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

	<!-- Jquery and typekit -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="//use.typekit.net/cst7eei.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script>
   $(window).load(function() { // enable function upon window load
$("#menu-button").click(function() { // when toggle is clicked...
$("#main-nav").toggle(); // ... open or close the navigation
});
var sbn = $(".sidebar-nav");
    bw = "absolute-wrap";
    hdr = $('header').height();
$(window).scroll(function(){
  if( $(this).scrollTop() > hdr ){
    sbn.addClass(bw);
  }else{
    sbn.removeClass(bw)
  }
});
});

</script>


	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="head-wrap">

	<header>
		<!-- Begin Logo -->

		<div id="object-wrap">
			<h1>
			  <a href="<?php echo home_url(); ?>">
			    <span>Burning Heart Web Design, Seattle Washington</span> <!-- for SEO -->
			    <img src="<?php bloginfo('template_directory');?>/images/logo.svg" alt="burning heart design logo"></a>
			</h1>
		</div>
		<!-- End Logo -->


		<!-- Mobile Icon -->
		<img id="menu-button" src="<?php bloginfo('template_directory');?>/images/mobile-nav.png" width="25" height="25" alt="menu-button" />


		<!-- START NAVIGATION -->
		<nav>
			<div id="main-nav">
		        <?php wp_nav_menu( array(
					'theme_location' => 'main-menu' ,
					'menu' => 'Main Menu' ,
					'container'  => 'ul',
				) ); ?>
			</div>
		</nav>

		<!-- END NAVIGATION -->
	</header>

</div>
<!-- End Head wrap -->
<!-- START MIDDLE -->
<div id="body-wrap">

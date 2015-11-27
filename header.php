<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package water lily
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300|Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700,400italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<script src="http://code.jquery.com/jquery-[latest].min.js"></script>
<script src="js/jquery.flip.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site clear">
	<?php do_action( 'before' ); ?>
	
	<nav>
	<ul class="hidnav">
	<li><a <? if(is_page( 'la-performance' )) echo 'class="select"'; ?> href="http://www.linkhumanrobot.website/la-performance/">La performance &frasl;</a></li>
	<li><a <? if(is_page( 'le-livre' )) echo 'class="select"'; ?> href="http://www.linkhumanrobot.website/le-livre/">Le livre &frasl;</a></li>
	<li><a <? if(is_category( 'entretiens' )) echo 'class="select"'; ?> href="http://www.linkhumanrobot.website/category/entretiens/">Les entretiens &frasl;</a></li>
	<li><a <? if(is_page( 'le-langage' )) echo 'class="select"'; ?> href="http://www.linkhumanrobot.website/le-langage/">Les langages &frasl;</a></li>
	<li><a <? if(is_category( 'photos' )) echo 'class="select"'; ?> href="http://www.linkhumanrobot.website/category/photos/">Photos &frasl;</a></li>
	<li><a <? if(is_category( 'videos' )) echo 'class="select"'; ?> href="http://www.linkhumanrobot.website/category/videos/">Vidéos &frasl;</a></li>
	<li><a <? if(is_category( 'dessins' )) echo 'class="select"'; ?> href="http://www.linkhumanrobot.website/category/dessins/">Dessins &frasl;</a></li>
	<li><a <? if(is_page( 'robots-2' )) echo 'class="select"'; ?> href="http://www.linkhumanrobot.website/robots-2/">Robots &frasl;</a></li>
	<li><a <? if(is_category( 'ateliers' )) echo 'class="select"'; ?>href="http://www.linkhumanrobot.website/category/ateliers/">Workshop &frasl;</a></li>
	<li><a <? if(is_page( 'dates' )) echo 'class="select"'; ?>href="http://www.linkhumanrobot.website/dates/">Dates &frasl;</a></li>
	</ul>
	</nav>
	
	<div id="site-aside">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
					<div class="site-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://www.linkhumanrobot.website/wp-content/themes/water-lily/img/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
					</div>

				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div><!-- .site-branding -->
			
		</header><!-- #masthead -->
	</div><!-- #site-aside -->	
	


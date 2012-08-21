<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
	
	<?php $heading_font = of_get_option('ttrust_heading_font'); ?>
	<?php $body_font = of_get_option('ttrust_body_font'); ?>
	<?php $home_message_font = of_get_option('ttrust_home_message_font'); ?>
	<?php if ($heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($heading_font)); ?>:regular,italic,bold,bolditalic" />
	<?php else : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" />
	<?php endif; ?>
	
	<?php if ($body_font != "" && $body_font != $heading_font) : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($body_font)); ?>:regular,italic,bold,bolditalic" />
	<?php elseif ($heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" />
	<?php endif; ?>
	
	<?php if ($home_message_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($home_message_font)); ?>:regular,italic,bold,bolditalic" />
	<?php else : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold" />
	<?php endif; ?>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if (of_get_option('ttrust_favicon') ) : ?>
		<link rel="shortcut icon" href="<?php echo of_get_option('ttrust_favicon'); ?>" />
	<?php endif; ?>
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?> >

<div id="container">	
<div id="header">
	<div class="inside clearfix">
							
		<?php $ttrust_logo = of_get_option('logo'); ?>
		<div id="logo">
		<?php if($ttrust_logo) : ?>				
			<h1 class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $ttrust_logo; ?>" alt="<?php bloginfo('name'); ?>" /></a></h1>
		<?php else : ?>				
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>				
		<?php endif; ?>	
		</div>
		
		<div id="mainNav" class="clearfix">							
			<div class="menu-main-nav-container"><ul id="menu-main-nav" class="sf-menu"><li id="menu-item-203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-203"><a href="http://krd-newsite.krd-design.net/">HOME</a></li>
			<li id="menu-item-739" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-739"><a href="http://krd-newsite.krd-design.net/?page_id=727"><span>ABOUT</span><span class="lift"></span></a></li>
			<li id="menu-item-170" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-48 current_page_item menu-item-170"><a href="http://krd-newsite.krd-design.net/?page_id=48">PORTFOLIO</a></li>
			<li id="menu-item-740" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-740"><a href="http://krd-newsite.krd-design.net/?page_id=719">SERVICES</a>
			<ul class="sub-menu">
			<li id="menu-item-743" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-743"><a href="http://krd-newsite.krd-design.net/?page_id=721">WEB DESIGN</a></li>
		<li id="menu-item-742" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-742"><a href="http://krd-newsite.krd-design.net/?page_id=723">WEB DEVELOPMENT</a></li>

	<li id="menu-item-741" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-741"><a href="http://krd-newsite.krd-design.net/?page_id=725">SEARCH ENGINE OPTIMIZATION</a></li>
</ul>
</li>
<li id="menu-item-148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-148"><a href="http://krd-newsite.krd-design.net/?page_id=28">BLOG</a></li>
<li id="menu-item-738" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-738"><a href="http://krd-newsite.krd-design.net/?page_id=734">CONTACT</a></li>
</ul></div>
			<?php wp_nav_menu( array('menu_class' => 'sf-menu', 'theme_location' => 'main', 'fallback_cb' => 'default_nav' )); ?>			
		</div>
		

				
				
				
	</div>	
</div>


<div id="main" class="clearfix">

	<?php if(is_front_page()):?>	
		<?php if(of_get_option('ttrust_slideshow_enabled')) get_template_part( 'part-slideshow'); ?>	
	<?php endif; ?>
<?php /*
Template Name: Services Page
*/ ?>
<?php get_header(); ?>	
		
		<div id="middle">
			<?php if(!is_front_page()):?>
				<div id="pageHead">
					<h1><?php the_title(); ?></h1>
					<?php $page_description = get_post_meta($post->ID, "_ttrust_page_description_value", true); ?>
					<?php if ($page_description) : ?>
						<p><?php echo $page_description; ?></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>		 
		<div id="content" class="clearfix full">
		<?php while (have_posts()) : the_post(); ?>			    
			<div <?php post_class('clearfix'); ?>>						
				<?php the_content(); ?>				
			</div>				
						
		<?php endwhile; ?>
		<a href="http://krd-newsite.krd-design.net/?page_id=865"><img id="branding" src="http://krd-newsite.krd-design.net/wp-content/themes/mindful/images/over_branding.jpg"></a>
		<a href="http://krd-newsite.krd-design.net/?page_id=888"><img id="package" src="http://krd-newsite.krd-design.net/wp-content/themes/mindful/images/over_package.jpg"></a>
		<a href="http://krd-newsite.krd-design.net/?page_id=907"><img id="print" src="http://krd-newsite.krd-design.net/wp-content/themes/mindful/images/over_print.jpg"></a>
		<a href="http://krd-newsite.krd-design.net/?page_id=869"><img id="seo" src="http://krd-newsite.krd-design.net/wp-content/themes/mindful/images/over_seo.jpg"></a>
		<a href="http://krd-newsite.krd-design.net/?page_id=723"><img id="webdevelopment" src="http://krd-newsite.krd-design.net/wp-content/themes/mindful/images/over_web_development.jpg"></a>
		<a href="http://krd-newsite.krd-design.net/?page_id=721"><img id="webdesign" src="http://krd-newsite.krd-design.net/wp-content/themes/mindful/images/over_webdesign.jpg"></a>
		   
		</div>
		</div>
		
<?php get_footer(); ?>
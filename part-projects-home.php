<?php $home_project_count = intval(of_get_option('ttrust_home_project_count')); ?>
<?php if($home_project_count > 0) : ?>	
<div id="projects" class="full homeSection clearfix">			
	<h3><span><?php echo of_get_option('ttrust_recent_projects_title'); ?></span></h3>		
	<?php	
		query_posts( array(
			'ignore_sticky_posts' => 1,			  			
    		'posts_per_page' => of_get_option('ttrust_home_project_count'),
    		'post_type' => array(				
				'project'					
				)
		));	
	?>		
					
	<div class="thumbs masonry clearfix">			
		<?php  while (have_posts()) : the_post(); ?>			
			<?php get_template_part( 'part-project-thumb'); ?>
		<?php endwhile; ?>
		<?php wp_reset_query();	?>		
	</div>
</div>
<?php endif; ?>
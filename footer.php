	</div>	
	<div id="footer">
		<div class="inside">		
		<div class="main clearfix">
				<img src="<?php bloginfo('stylesheet_directory')?>/images/footer_left.png" id="footer-logo"> 
		</div><!-- end footer main -->							
			
		<div class="secondary clearfix">	
			<?php $footer_left = of_get_option('ttrust_footer_left'); ?>
			<?php $footer_right = of_get_option('ttrust_footer_right'); ?>
			<div class="left"><p><?php if($footer_left){echo($footer_left);} else{ ?>&copy; <?php echo date('Y');?> <a href="<?php bloginfo('url'); ?>"><strong><?php bloginfo('name'); ?></strong></a> All Rights Reserved.<?php }; ?></p></div>
			<div class="right"><p><?php if($footer_right){echo($footer_right);} else{ ?>Theme by <a href="http://themetrust.com" title="Premium WordPress Themes"><strong>Theme Trust</strong></a><?php }; ?></p></div>
		</div><!-- end footer secondary-->		
		</div>		
	</div><!-- end footer -->
</div><!-- end container -->
<?php wp_footer(); ?>
</body>
</html>
<?php $slideshow_delay = of_get_option('ttrust_slideshow_delay'); ?>
<?php $slideshow_delay = ($slideshow_delay != "") ? $slideshow_delay : '6'; ?>

<script type="text/javascript">
//<![CDATA[
		jQuery(document).ready(function(){
			$status = jQuery(".status");
			var options = {		
				autoPlayDelay: <?php echo $slideshow_delay . '000'; ?>,
				hidePreloaderDelay: 500,
				nextButton: ".next",
				prevButton: ".prev",
				pauseButton: ".pause",
				hidePreloaderusingCSS: false,						
				animateStartingFrameIn: true, 			
				transitionThreshold: 500,
				pauseOnHover: false,
				fallbackTheme: { 							
					speed: 500
				},
				afterLoaded: function(){
					$("#homeSlideshow .controls").fadeIn(100);
					$("#homeSlideshow .controls li:nth-child("+(sequence.settings.startingFrameID)+")").addClass("active");
				},				
				afterNextFrameAnimatesIn: function(){
					jQuery("#homeSlideshow .controls li:not(:nth-child("+(sequence.nextFrameID)+"))").removeClass("active");
					jQuery("#homeSlideshow .controls li:nth-child("+(sequence.nextFrameID)+")").addClass("active");
				}
				
			};

			var sequence = jQuery("#sequence").sequence(options).data("sequence");
			
			jQuery("#homeSlideshow .controls li").click(function(){
					
						jQuery(this).removeClass("active").addClass("active");
						sequence.nextFrameID = jQuery(this).index()+1;
						sequence.goTo(sequence.nextFrameID);
				
			});
		})
//]]>
</script>
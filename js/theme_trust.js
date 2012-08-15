
///////////////////////////////		
// iPad and iPod Detection
///////////////////////////////
	
function isMobile(){
    return (
        (navigator.userAgent.match(/Android/i)) ||
		(navigator.userAgent.match(/webOS/i)) ||
		(navigator.userAgent.match(/iPhone/i)) ||
		(navigator.userAgent.match(/iPod/i)) ||
		(navigator.userAgent.match(/iPad/i)) ||
		(navigator.userAgent.match(/BlackBerry/))
    );
}


///////////////////////////////		
// Isotope Browser Check
///////////////////////////////

function isotopeAnimationEngine(){
	if(jQuery.browser.mozilla || jQuery.browser.msie){
		return "jquery";
	}else{
		return "css";
	}
}


///////////////////////////////
// Project Filtering 
///////////////////////////////

function projectFilterInit() {
	
	jQuery('#filterNav a').click(function(){
		var selector = jQuery(this).attr('data-filter');
		var container = jQuery('.thumbs.masonry');
		var colW = container.width() * 0.25;	
		container.isotope({
			filter: selector,			
			hiddenStyle : {
		    	opacity: 0,
		    	scale : 1
			},
			resizable: false,
			masonry: {
				columnWidth: colW
			}			
		});
	
		if ( !jQuery(this).hasClass('selected') ) {
			jQuery(this).parents('#filterNav').find('.selected').removeClass('selected');
			jQuery(this).addClass('selected');
		}
	
		return false;
	});	
}

///////////////////////////////
// Isotope Grid Resize
///////////////////////////////

function gridResize() {	
	// update columnWidth on window resize
	var container = jQuery('.thumbs.masonry');
	var colW = container.width() * 0.25;	
	container.isotope({
		resizable: false,
		masonry: {
			columnWidth: colW
		}
	});			
}


///////////////////////////////
// Project thumbs 
///////////////////////////////

function projectThumbInit() {
	
	if(!isMobile()) {		
	
		jQuery(".project.small .inside a").hover(
			function() {
				jQuery(this).find('img:last').stop().fadeTo("fast", .1);
				jQuery(this).find('img:last').attr('title','');	
			},
			function() {
				jQuery(this).find('img:last').stop().fadeTo("fast", 1);	
		});
			
		jQuery(".project.small .inside").hover(	
			function() {				
				jQuery(this).find('.title').stop().fadeTo("fast", 1);
				jQuery(this).find('img:last').attr('title','');				
			},
			function() {				
				jQuery(this).find('.title').stop().fadeTo("fast", 0);							
		});
		
	}	
	
	var container = jQuery('.thumbs.masonry');
	var colW = container.width() * 0.25;	
	container.isotope({
		animationEngine: "jquery",
		resizable: false,
		masonry: {
			columnWidth: colW
		}
	});	
	jQuery(".project.small").css("opacity", "1");	
	//alert(container.width());	
}
	
	
jQuery.noConflict();
jQuery(window).load(function(){		
	projectThumbInit();	
	projectFilterInit();
	jQuery(".videoContainer").fitVids();
	
	jQuery(window).smartresize(function(){
		gridResize();
	});	
	
});
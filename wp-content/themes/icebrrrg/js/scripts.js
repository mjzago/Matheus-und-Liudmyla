/**
 * icebrrrg.js
 * 
 * The main javascript for Icebrrrg.
 * 
 * Copyright 2012 Opendesigns.
 * http://www.opendesigns.org/design/icebrrrg/
 * 
 */

jQuery(document).ready(function(){
	
	
	
/* FLEX SLIDER */
	var $flexSlider = $('.flexslider');
	$flexSlider.flexslider({
		animation: "slide",
		controlsContainer: ".flex-container",
		prevText: "&larr;",
		nextText: "&rarr;",
		controlNav: false,
directionNav: true,
		before:	function($slider){
			$slider.find('.flex-caption').fadeOut('fast');			
		},
		after: function($slider){
			$slider.find('.flex-caption').fadeIn();			
		},
		
	});
	
	
  $(window).load(function() {
    $('.flexslider').flexslider({
			animation: "slide",
          controlsContainer: ".flex-container"
	});
  });
	
	/* prettyPhoto */
	
	$("a[rel^='prettyPhoto']").prettyPhoto({
		
		social_tools: false,
		
		
	});
	
});


//End document.ready


const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
  const button = item.querySelector('.accordion-button');
  const content = item.querySelector('.accordion-content');

  button.addEventListener('click', () => {
	item.classList.toggle('active');
  });
});
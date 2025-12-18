/**
 * Theme JavaScript
 * 
 * Handles mobile menu toggle and search functionality
 */

(function($){
	'use strict';

	// Mobile menu toggle
	$('.mobile-menu-toggle').on('click', function(){
		var $this = $(this);
		var $icon = $this.find('.menu-icon');
		var $nav = $('#nav');
		var isExpanded = $this.attr('aria-expanded') === 'true';

		// Toggle icon
		$icon.toggleClass('fa-bars fa-close');
		
		// Toggle navigation
		$nav.slideToggle();
		
		// Update ARIA attribute
		$this.attr('aria-expanded', !isExpanded);
	});

	// Mobile search toggle
	$('.mobile-search-toggle').on('click', function(){
		var $this = $(this);
		var $search = $('.mobile-search');
		var isExpanded = $this.attr('aria-expanded') === 'true';

		// Toggle search
		$search.slideToggle();
		
		// Update ARIA attribute
		$this.attr('aria-expanded', !isExpanded);
		
		// Focus on search input when opened
		if (!isExpanded) {
			$search.find('input[type="text"]').focus();
		}
	});

	// Keyboard accessibility for menu
	$(document).on('keydown', function(e) {
		// Close menu on Escape key
		if (e.key === 'Escape') {
			var $nav = $('#nav');
			var $search = $('.mobile-search');
			
			if ($nav.is(':visible') && $(window).width() < 768) {
				$nav.slideUp();
				$('.mobile-menu-toggle').attr('aria-expanded', 'false');
				$('.mobile-menu-toggle .menu-icon').removeClass('fa-close').addClass('fa-bars');
			}
			
			if ($search.is(':visible')) {
				$search.slideUp();
				$('.mobile-search-toggle').attr('aria-expanded', 'false');
			}
		}
	});

})(jQuery);

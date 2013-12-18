


	jQuery(document).ready(function() {

		jQuery('#prefix-display-button').sidr(
		{
			name: 'sidr-left',
			source: '#main-menu-navigation, #main-prefix'
		});

		jQuery('#search-controller-button').sidr(
		{
			name: 'sidr-right',
			source: '#search-wrapper',
			side: 'right'
		});
	
	});


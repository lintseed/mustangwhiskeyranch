jQuery(document).ready(function() {

	jQuery('.size-fit' ).click(function() {
	  jQuery('.additional').toggle('blind', 1000);
	  jQuery(this).toggleClass('down');
	});
	
});
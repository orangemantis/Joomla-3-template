jQuery(document).ready(function(){
	var $nav = jQuery('#navigation');
	$nav.on('show', function(){
		jQuery(this).addClass('omc-collapse-padding');
	});
	
	$nav.on('hidden', function(){
		jQuery(this).removeClass('omc-collapse-padding');
	});
});
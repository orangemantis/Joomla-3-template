jQuery(document).ready(function(){
	alert("I'm hooked up!");
	var $nav = jQuery('#navigation');
	$nav.on('show', function(){
		jQuery(this).addClass('omc-collapse-padding');
	});
	
	$nav.on('hidden', function(){
		jQuery(this).removeClass('omc-collapse-padding');
	});
});
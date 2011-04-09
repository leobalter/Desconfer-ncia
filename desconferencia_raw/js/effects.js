$(document).ready(function() {
	// Quem somos
	$(".quem-somos").hide();	
	$(".saiba-mais").click(function () {		
		$(".quem-somos").slideToggle('fast');	
		$(this).toggleClass('active');
	});
});





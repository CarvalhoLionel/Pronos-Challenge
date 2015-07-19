$(document).ready(function() {
	/*$('.dropdown').hover(
		function(){
			$('.dropdown-toggle').dropdown();
			console.log('ok : ');
		}
	);*/
	
	$('ul.nav li.dropdown').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(20).fadeIn();
	}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(20).fadeOut();
	});

});
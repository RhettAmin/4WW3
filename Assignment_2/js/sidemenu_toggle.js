$(document).ready(function () {
	var body = $('body');
	$('#toggle-sidemenu').bind('click', function() {
		body.toggleClass('sidemenu-open');
		return false;
	});

	$('.content').click(function(){
		if(body.hasClass('sidemenu-open')){
			body.toggleClass('sidemenu-open');
			return false;
		}
	});

	$('.page-footer').click(function(){
		if(body.hasClass('sidemenu-open')){
			body.toggleClass('sidemenu-open');
			return false;
		}
	});

	/* Delay anchor tag href links*/
	$('a').click(function(e) {
	    var anchor = $(this), h;
	    h = anchor.attr('href');
	    e.preventDefault();
	    anchor.animate(5000, function() {
	        window.location = h;
	    });
	});

});
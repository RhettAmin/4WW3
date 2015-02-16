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
	    var h = $(this).attr('href');
	    e.preventDefault();
	    setTimeout(function(){ window.location = h; }, 300);
	});

});
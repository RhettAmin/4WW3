$(document).ready(function () {
	var body = $('body');
	//Open the sidemenu when user clicks hamburger icon
	$('#toggle-sidemenu').bind('click', function() {
		body.toggleClass('sidemenu-open');
		return false;
	});

	//Close sidemenu when the body is clicked
	$('.content').click(function(){
		if(body.hasClass('sidemenu-open')){
			body.toggleClass('sidemenu-open');
			return false;
		}
	});

	//Close sidemenu when the footer is clicked
	$('.page-footer').click(function(){
		if(body.hasClass('sidemenu-open')){
			body.toggleClass('sidemenu-open');
			return false;
		}
	});

	//sidemenu, chaning pages on click
	$('a').click(function(e) {
	    var h = $(this).attr('href');
	    e.preventDefault();
	    setTimeout(function(){ window.location = h; }, 300);
	});

});
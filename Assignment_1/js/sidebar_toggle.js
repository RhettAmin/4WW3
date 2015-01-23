(function() {
	var body = $('.page-wrap');
	$('.toggle').bind('click', function() {
		body.toggleClass('sidebar-open');
		return false;
	});

	$('body').click(function(e){
		if(body.hasClass('sidebar-open')){
			body.toggleClass('sidebar-open');
			return false;
		}
	});
})();
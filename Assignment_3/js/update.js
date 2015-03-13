$(document).ready(function(){

	$("#changeName").click(function() {
		$("input").slideUp("fast");
		$(".nameSlider").slideDown(500);
	});

	$("#changeUser").click(function() {
		$("input").slideUp("fast");
		$(".userSlider").slideDown(500);
	});

	$("#changeEmail").click(function() {
		$("input").slideUp("fast");
		$(".emailSlider").slideDown(500);
	});

});
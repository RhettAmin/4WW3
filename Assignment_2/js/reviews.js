$(document).ready(function(){

	$("#submit").click(function(e){
		e.preventDefault();

		/****************** TEXT ******************/
		$("<form class=\"card-panel z-depth-1 grey lighten-3\"><div class=\"row\"><div class=\"flow-text\"><p>"
			+ $("#slider").val() + "/5<p>" + $("#textarea1").val() + "</p>"
			+ "</p></div></div></form>").prependTo("existingReviews");
		$("#review").trigger("reset");
		/****************** RATING ******************/

	});
});
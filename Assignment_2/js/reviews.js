/* This function takes text that the user enters into the text area and a rating from the slider.
 * When the submit button is pressed this function prepends new code to the reviews html file.
 * The code is created with the text entered by the user and the rating they gave using the slider.
 * Each review will appear under the review submission area as a new card, with the most recent ratings appearing first. */
$(document).ready(function(){

	$("#submit").click(function(e){
		e.preventDefault();

		$("<form class=\"card-panel z-depth-1 grey lighten-3\"><div class=\"row\"><div class=\"flow-text\"><p>"
			+ $("#slider").val() + "/5<p>" + $("#textarea1").val() + "</p>"
			+ "</p></div></div></form>").prependTo("existingReviews");
		$("#review").trigger("reset");

	});
});

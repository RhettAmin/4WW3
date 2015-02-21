/* This function takes text that the user enters into the text area and a rating from the slider.
 * When the submit button is pressed this function prepends new code to the reviews html file.
 * The code is created with the text entered by the user and the rating they gave using the slider.
 * Each review will appear under the review submission area as a new card, with the most recent ratings appearing first. */
$(document).ready(function(){

	$("#submit").click(function(e){
		e.preventDefault();

		$("<form class=\"card-panel z-depth-1 grey lighten-3\"><div class=\"row\"><div class=\"flow-text\"><p>"
			+ $("#textarea1").val() + "</p>"
			+ "<div class=\"range-field col s4 offset-s4\"><input type=\"range\" id=\"slider\" min=\"1\" max=\"5\"value=\""
			+ $("#slider").val() + "\" disabled=\"disabled\"/></div>"
			+ "</p></div></div></form>").prependTo("existingReviews");
		$("#review").trigger("reset");

	});
});
$(document).ready(function(){

	/*********************************************
	This function is called when the user clicks 
	the Submit button. It checks check if both 
	fields have values then determines if those 
	values are correct with what is stored in
	localstorage. 
	*********************************************/
	$("#logout").click(function(e) {
		e.preventDefault(); // stops page from refreshing
		setTimeout(function(){ window.location = "index.html"; }, 500);	
	});			//End click function

});
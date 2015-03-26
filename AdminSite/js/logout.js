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
		sessionStorage.setItem("admin_key", 0);
		toast("Admin session terminated.", 500);
		setTimeout(function(){ window.location = "admin_login.html"; }, 500);	
	});			//End click function

});
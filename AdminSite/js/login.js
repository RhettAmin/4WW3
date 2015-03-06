$(document).ready(function(){

	/*********************************************
	This function is called when the user clicks 
	the Submit button. It checks check if both 
	fields have values then determines if those 
	values are correct with what is stored in
	localstorage. 
	*********************************************/
	$("#submit_log").click(function(e) {
		e.preventDefault(); // stops page from refreshing
		
		if ($("#icon_uname").val() == "" && $("#icon_pwrd").val() == "") { 	/* Check if the fields are not empty */
			toast("Fields are empty" , 2000);
		} else if(!$("#icon_uname").val() && $("#icon_pwrd").val()) { 		/* Check if username is not empty */
			toast("No username entered" , 2000);
		} else if($("#icon_uname").val() && !$("#icon_pwrd").val()) { 		/* Check if passowrd is not empty */
			toast("No password entered" , 2000);
		} else {												
			if ($("#icon_uname").val() == "Admin" && $("#icon_pwrd").val() == "antwoomin" ) { /* Check if usernmae exists in storage */
				setTimeout(function(){ window.location = "main.html";}, 500);
				$('#loging_form').trigger("reset");
			} else {
				if ($("#icon_uname").val() == "Admin" && $("#icon_pwrd").val() != "antwoomin" ){ 
					toast("Wrong Password!" , 1500);	
				} else if ($("#icon_uname").val() != "Admin" && $("#icon_pwrd").val() == "antwoomin" ) { /* usernmae is right, but password isnt*/
					toast("Wrong Username!" , 1500);
				}
			}
		}
	});			//End click function

});
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
			if (localStorage.getItem("user_"+$("#icon_uname").val()) === null) { /* Check if usernmae exists in storage */
				toast("That Username doesn't exist" , 2000);
			} else {
				var check = JSON.parse(localStorage.getItem("user_"+$("#icon_uname").val()));		//get key with entered credentials
				/* Check if credentials are correct, welcome then load index page */
				if ($("#icon_uname").val()==check.username && $("#icon_pwrd").val()==check.password){ 
					toast("Welcome " + $("#icon_uname").val() + "!" , 1500);						//Welcome user
					setTimeout(function(){ window.location = "index.html"; }, 1500);
					$('#loging_form').trigger("reset");
				} else if ($("#icon_pwrd").val()!=check.password) { /* usernmae is right, but password isnt*/
					toast("Password does not match" , 2000);
				}
			}
		}
	});			//End click function

});
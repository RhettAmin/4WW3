$(document).ready(function(){

	var name_regex = /[a-zA-Z]{1,25}/;
	var email_regex = /([a-z]*\@[a-z]*\.[a-z]*)/;
	var phone_regex = /[0-9]{3}\-[0-9]{3}\-[0-9]{4}/;
	var user_regex = /[a-z]{5,}/;
	var addr_regex = /[0-9]{1,5}/;
	var postal_regex = /[a-zA-Z0-9]{3}\ [a-zA-Z0-9]{3}/;

	var error = [ 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1 ];
	

		/****************** NAME ******************/
		// First Name
		$('#icon_fname').blur(function() {
			console.log("test");
			if ( !name_regex.test($("#icon_fname").val()) ) {
				toast('First Name is invalid', 2000);
			}else { error[0] = 0; }
		});
		// Last Name
		$('#icon_fname').blur(function() {
			if ( !name_regex.test($("#icon_lname").val()) ) {
				toast('Last Name is invalid', 2000);
			}else { error[1] = 0; }
		});

		/****************** CONTACT ******************/
		// Email
		$('#icon_fname').blur(function() {
			if ( !email_regex.test($("#icon_email").val()) ) {
				toast('Email is invalid', 2000);
			}else { error[2] = 0; }
		});
		$('#icon_fname').blur(function() {
			if ( !phone_regex.test($("#icon_phone").val()) ) {
				toast('Phone number is invalid', 2000);
			}else { error[3] = 0; }
		});

		/****************** ACCOUNT ******************/
		// Username
		$('#icon_fname').blur(function() {
			if ( !user_regex.test($("#icon_user").val()) ) {
				toast('Username is invalid', 2000);
			}else { error[4] = 0; }
		});
		// Password
		$('#icon_fname').blur(function() {
			if ( !user_regex.test($("#icon_pass").val()) ) {
				toast('Password is invalid', 2000);
			}else { error[5] = 0; }
		});
		// Confirm Password
		$('#icon_fname').blur(function() {
			if ( $("#icon_cpass").val() != $("#icon_pass").val() ) {
				toast('Password confirmation does not match password', 2000);
			}else { error[6] = 0; }
		});

		/****************** ADDRESS ******************/
		// Street #
		$('#icon_fname').blur(function() {
			if ( !addr_regex.test($("#icon_streetnum").val()) ) {
				toast('Street Number is invalid', 2000);
			}else { error[7] = 0; }
		});
		// Street Name
		$('#icon_fname').blur(function() {
			if ( !name_regex.test($("#icon_streetname").val()) ) {
				toast('Street Name is invalid', 2000);
			}else { error[8] = 0; }
		});

		/****************** LOCATION ******************/
		// City
		$('#icon_fname').blur(function() {
			if ( !name_regex.test($("#icon_city").val()) ) {
				toast('City is invalid', 2000);
			}else { error[9] = 0; }
		});
		// Province
		$('#icon_fname').blur(function() {
			if ( !name_regex.test($("#icon_province").val()) ) {
				toast('Province is invalid', 2000);
			}else { error[10] = 0; }
		});
		// Postal Code
		$('#icon_fname').blur(function() {
			if ( !postal_regex.test($("#icon_postal").val()) ) {
				toast('Postal Code is invalid', 2000);
			}else { error[11] = 0; }
		});


	$("#submit").click(function(e){
		e.preventDefault();
		if (error.length == 0) {
			// Check browser support 
			
			if (typeof(Storage) != "undefined") {
			    // Store
			    // var user = $("#icon_user").val();
			    // var pass =  $("#icon_pass").val();
			    var items = {username: $("#icon_user").val(), password: $("#icon_pass").val()};
				localStorage.setItem('user', JSON.stringify(items));

			    //localStorage.setItem("User", {username: user, password: pass});
				var test = JSON.parse(localStorage.getItem('user'));
				console.log( test.username, test.password );
				toast("Thank you for registering " + test.username , 2000);
				
			} else {
			    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
			} 		
		} 



	});
});
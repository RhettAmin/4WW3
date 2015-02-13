$(document).ready(function(){

	var name_regex = /^[a-zA-Z]+$/;
	var email_regex = /([a-z]*\@[a-z]*\.[a-z]*)$/;
	var phone_regex = /^[0-9]{3}\-[0-9]{3}\-[0-9]{4}$/;
	var user_regex = /^[a-z]{6,}$/;
	var addr_regex = /^[0-9]+$/;
	
	$("#submit").click(function(e){
		e.preventDefault();

		/****************** NAME ******************/
		// First Name
		if ( !name_regex.test($("#icon_fname").val()) ) {
			toast('First Name is invalid', 2000);
		}
		// Last Name
		if ( !name_regex.test($("#icon_lname").val()) ) {
			toast('Last Name is invalid', 2000);
		}

		/****************** CONTACT ******************/
		// Email
		if ( !email_regex.test($("#icon_email").val()) ) {
			toast('Email is invalid', 2000);
		}
		if ( !phone_regex.test($("#icon_phone").val()) ) {
			toast('Phone number is invalid', 2000);
		}

		/****************** ACCOUNT ******************/
		// Username
		if ( !user_regex.test($("#icon_user").val()) ) {
			toast('Username is invalid', 2000);
		}
		// Password
		if ( !user_regex.test($("#icon_pass").val()) ) {
			toast('Password is invalid', 2000);
		}
		// Confirm Password
		if ( $("#icon_cpass").val() != $("#icon_pass").val() ) {
			toast('Password confirmation does not match password', 2000);
		}

		/****************** ADDRESS ******************/
		// Unit #
		if ( !name_regex.test($("#icon_streetname").val()) ) {
			toast('Street Name is invalid', 2000);
		}
		// Street #
		if ( !name_regex.test($("#icon_streetname").val()) ) {
			toast('Street Name is invalid', 2000);
		}
		// Street Name
		if ( !name_regex.test($("#icon_streetname").val()) ) {
			toast('Street Name is invalid', 2000);
		}

		/*if($("#username").val() =="Admin" && $("#password").val() =="capstone2014") {
			var anchor = $("#login"), h;
		    h = anchor.attr('href');
		    e.preventDefault();
		    anchor.animate({opacity: 2}, function() {
		        window.location = h;
		    });
		} 
		else {
			e.preventDefault();
			toast('Username/Password is invalid', 2000);
		}
		*/
	});

});
$(document).ready(function(){

	var name_regex = /[a-zA-Z]{1,25}/;
	var email_regex = /([a-z]*\@[a-z]*\.[a-z]*)/;
	var phone_regex = /[0-9]{3}\-[0-9]{3}\-[0-9]{4}/;
	var user_regex = /[a-z]{5,}/;
	var addr_regex = /[0-9]{1,5}/;
	var postal_regex = /[a-zA-Z0-9]{3}\ [a-zA-Z0-9]{3}/;

	var error = 0;
	/*
	$("#submit").click(function(e){
		e.preventDefault();

		/****************** NAME ******************
		// First Name
		if ( !name_regex.test($("#icon_fname").val()) ) {
			toast('First Name is invalid', 2000);
			error = 1;
		}else { error = 0 }
		// Last Name
		if ( !name_regex.test($("#icon_lname").val()) ) {
			toast('Last Name is invalid', 2000);
			error = 1;
		}else { error = 0 }

		/****************** CONTACT ******************
		// Email
		if ( !email_regex.test($("#icon_email").val()) ) {
			toast('Email is invalid', 2000);
			error = 1;
		}else { error = 0 }
		if ( !phone_regex.test($("#icon_phone").val()) ) {
			toast('Phone number is invalid', 2000);
			error = 1;
		}else { error = 0 }

		/****************** ACCOUNT ******************
		// Username
		if ( !user_regex.test($("#icon_user").val()) ) {
			toast('Username is invalid', 2000);
			error = 1;
		}else { error = 0 }
		// Password
		if ( !user_regex.test($("#icon_pass").val()) ) {
			toast('Password is invalid', 2000);
			error = 1;
		}else { error = 0 }
		// Confirm Password
		if ( $("#icon_cpass").val() != $("#icon_pass").val() ) {
			toast('Password confirmation does not match password', 2000);
			error = 1;
		}else { error = 0 }

		/****************** ADDRESS ******************
		// Street #
		if ( !addr_regex.test($("#icon_streetnum").val()) ) {
			toast('Street Number is invalid', 2000);
			error = 1;
		}else { error = 0 }
		// Street Name
		if ( !name_regex.test($("#icon_streetname").val()) ) {
			toast('Street Name is invalid', 2000);
			error = 1;
		}else { error = 0 }

		/****************** LOCATION ******************
		// City
		if ( !name_regex.test($("#icon_city").val()) ) {
			toast('City is invalid', 2000);
			error = 1;
		}else { error = 0 }
		// Province
		if ( !name_regex.test($("#icon_province").val()) ) {
			toast('Province is invalid', 2000);
			error = 1;
		}else { error = 0 }
		// Postal Code
		if ( !postal_regex.test($("#icon_postal").val()) ) {
			toast('Postal Code is invalid', 2000);
			error = 1;
		}else { error = 0 }

		if (error = 0) {
			console.log("test");
			// Check browser support
			if (typeof(Storage) != "undefined") {
			    // Store
			    var user = $("#icon_user").val();
			    var pass =  $("#icon_pass").val();
			    localStorage.setItem("User",user , pass);
				console.log( localStorage.getItem( "user" ) );
				toast("Thank you for registering" + user, 2000);
				$('form').reset();
			} else {
			    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
			}
		}

	});
	*/

	$('#regis_form').validate({ // initialize the plugin
        rules: {
            username: {
                required: true,
                minlength: 6
            }
        },
        submitHandler: function (form) { // for demo
            toast('YAya is invalid', 2000); // for demo
            return false; // for demo
        }
    });	

});
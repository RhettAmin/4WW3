$(document).ready(function(){
	$("#submit_log").click(function(e) {
		e.preventDefault();

		if (localStorage.getItem("user_"+$("#icon_uname").val()) === null) {
			toast("That Username doesn't exist" , 2000);
		} else {
			var check = JSON.parse(localStorage.getItem("user_"+$("#icon_uname").val()));
			if ($("#icon_uname").val()==check.username && $("#icon_pwrd").val()==check.password){
				toast("Welcome " + $("#icon_uname").val() + "!" , 2000);
				setTimeout(function(){ window.location = "index.html"; }, 2000);
				$('#regis_form').trigger("reset");
			} else if ($("#icon_pwrd").val()!=check.password) {
				toast("Password does not match" , 2000);
			}
		}
	});

});
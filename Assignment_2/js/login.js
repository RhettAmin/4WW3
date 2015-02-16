$(document).ready(function(){

	$("#submit_log").click(function(e) {
		e.preventDefault();

		for ( var i = 0, len = localStorage.length; i < len; ++i ) {
		  console.log( localStorage.getItem( localStorage.key( i ) ) );
		}

	});

});
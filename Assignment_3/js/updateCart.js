$(document).ready(function(){

	$(".update").click(function(e) {
		e.preventDefault();

		var value = $(this).attr('id');
		var q = $("input[name="+value+"]").val();
		//var s = "id: " + value + " quantity: " + q;
		//toast(s, 2000);

        $.ajax({ 
            url: 'updateCart.php',
            data: {id: value, quantity: q},
            type: 'POST',
            success: function(output) {
                toast(output,1000);
                setTimeout(function(){ window.location = "../checkout/"; }, 1000);
            },
            error: function(output) {
                alert(output);
            }
        });
	});
});
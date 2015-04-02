$(document).ready(function(){

	$(".update").click(function(e) {
		e.preventDefault();

		var value = $(this).attr('id');
		var q = $("input[name="+value+"]").val();

        $.ajax({ 
            url: 'updateCart.php',
            data: {id: value, quantity: q},
            type: 'POST',
            success: function(output) {
                toast(output,1000);
                setTimeout(function(){ window.location = "../checkout"; }, 1000);
            },
            error: function(output) {
                alert(output);
            }
        });
	});


	$(".delete").click(function(e) {
		e.preventDefault();

		var value = $(this).attr('id');

        $.ajax({ 
            url: 'deleteItem.php',
            data: {id: value},
            type: 'POST',
            success: function(output) {
                toast(output,1000);
                setTimeout(function(){ window.location = "../checkout"; }, 1000);
            },
            error: function(output) {
                alert(output);
            }
        });
	});


	$(".confirm").click(function(e) {
		e.preventDefault();
        $.ajax({ 
            url: 'confirmCart.php',
            type: 'POST',
            success: function(output) {
                toast(output,1000);
                setTimeout(function(){ window.location = "../catalogue"; }, 1000);
            },
            error: function(output) {
                alert(output);
            }
        });
	});

});
//This function takes user input from the search bar and scrolls the page to the found string
$(document).ready(function(){
    var prodArray = [];

    $("#search").keyup(function(e) {
        e.preventDefault(e);
        var g = $(this).val().toLowerCase();
        $(".catalogue-items").each(function() {
            var s = $(this).text().toLowerCase();
            $(this).closest('.catalogue-items')[ s.indexOf(g) !== -1 ? 'show' : 'hide' ]();
        });
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#toTheMoon').fadeIn();
        } else {
            $('#toTheMoon').fadeOut();
        }
    });

    $("#toTheMoon").click(function(e) {
        e.preventDefault();
        $('html,body').animate({scrollTop: 0});
    });


    $(".addToCart").click(function(e) {
        e.preventDefault();
        var value = $(this).attr('id');

        $.ajax({ 
            url: 'addToCart.php',
            data: {id: value},
            type: 'POST',
            success: function(output) {
                toast(output,2000);
                $("#submitCart").show();
            },
            error: function(output) {
                alert(output);
            }
        });
    });

});


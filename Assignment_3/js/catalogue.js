//This function takes user input from the search bar and scrolls the page to the found string
$(document).ready(function(){

    $("#search-criteria").on("keyup", function() {
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

});


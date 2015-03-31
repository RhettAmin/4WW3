//This function takes user input from the search bar and scrolls the page to the found string
$(document).ready(function(){

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


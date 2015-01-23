var menuEnabled = false;

$("#sidebar-slide").click(function() {
    if (menuEnabled) {
        $("#sidebar").toggle( "slide" );
        menuEnabled = false;
    } else {
        $("#sidebar").toggle( "slide" );
        $("html").css("overflow-x", "hidden");
        menuEnabled = true;
    }
});
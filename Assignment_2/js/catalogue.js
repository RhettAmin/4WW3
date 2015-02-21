//This function takes user input from the search bar and hides any cards containing strings that do not match the search criteria
/*
$("#search-criteria").on("keyup", function() {
    var g = $(this).val().toLowerCase();
    $(".catalogue-items").each(function() {
        var s = $(this).text().toLowerCase();
        $(this).closest('.catalogue-items')[ s.indexOf(g) !== -1 ? 'animate({scrollTop: divPosition.top}, "slow")' : 'show' ]();
    });
});
*/
$("#submit").click(function(e) {
	e.preventDefault();
    var g = $("#search-criteria").val();
    
    $(".catalogue-items").each(function() {
        //var s =  $("*:contains('" + g + "')");
        //var divPosition = $('.catalogue-items').offset().top;
        //$('html, body').animate({scrollTop: divPosition}, "fast");
        if ($(this).text().search(new RegExp(g, "i")) > 0) {
	        //$(this).toggleClass('highlight');
	        //$('html,body').animate({scrollTop: $("."+g).offset().top - 100});
	        $('html,body').animate({scrollTop: $(this).offset().top - 50});
	        setTimeout(function(){ $("html, body").stop(); }, 500);
	        //setTimeout(function(){ $(this).toggleClass('highlight'); }, 500);
    	}
    });	

});



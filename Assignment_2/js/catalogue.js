//This function takes user input from the search bar and scrolls the page to the found string

$("#submit").click(function(e) {
	e.preventDefault();
    var g = $("#search-criteria").val(); // Get search bar value
    //Check through each catalogue item
    $(".catalogue-items").each(function() {
    	//Check if text is found in any item
        if ($(this).text().search(new RegExp(g, "i")) > 0) {	
        	//Scroll to item where string was found
	        $('html,body').animate({scrollTop: $(this).offset().top - 50});
	        //Unlock scroll and page has been scrolled
	        setTimeout(function(){ $("html, body").stop(); }, 500); 
    	}
    });	
});

/************************ DISREGARD ******************************/
/*
$("#search-criteria").on("keyup", function() {
    var g = $(this).val().toLowerCase();
    $(".catalogue-items").each(function() {
        var s = $(this).text().toLowerCase();
        $(this).closest('.catalogue-items')[ s.indexOf(g) !== -1 ? 'animate({scrollTop: divPosition.top}, "slow")' : 'show' ]();
    });
});
*/
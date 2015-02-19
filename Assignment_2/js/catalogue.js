//This function takes user input from the search bar and hides any cards containing strings that do not match the search criteria

$("#search-criteria").on("keyup", function() {
    var g = $(this).val().toLowerCase();
    $(".catalogue-items").each(function() {
        var s = $(this).text().toLowerCase();
        $(this).closest('.catalogue-items')[ s.indexOf(g) !== -1 ? 'show' : 'hide' ]();
    });
});
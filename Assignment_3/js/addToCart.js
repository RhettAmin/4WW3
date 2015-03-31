$(document).ready(function(){

    $("#submitcat").click(function(e) {
        e.preventDefault();

        $('input[type=text]').each(
            function(index){  
                var input = $(this);
               
                toast(("id: " + input.attr('name') + "Value: " + input.val()), 2000);
            }
        ):
    });

});
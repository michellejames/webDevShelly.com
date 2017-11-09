
jQuery( document ).ready(function( $ ) {
    console.log( "ready!" );

    $(".filter-link").click(function (e) {
    	e.preventDefault();
    	if (!$(this).hasClass("show-all")) {
			var term = $(this).attr("data-id");
	    	$(".work-pieces").hide();
	    	$("."+term).fadeIn();
    	} else {
    		$(".work-pieces").fadeIn();
    	}
    	
    })




});


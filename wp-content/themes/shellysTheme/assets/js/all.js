
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


//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm1haW4uanMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJmaWxlIjoiYWxsLmpzIiwic291cmNlc0NvbnRlbnQiOlsiXG5qUXVlcnkoIGRvY3VtZW50ICkucmVhZHkoZnVuY3Rpb24oICQgKSB7XG4gICAgY29uc29sZS5sb2coIFwicmVhZHkhXCIgKTtcblxuICAgICQoXCIuZmlsdGVyLWxpbmtcIikuY2xpY2soZnVuY3Rpb24gKGUpIHtcbiAgICBcdGUucHJldmVudERlZmF1bHQoKTtcbiAgICBcdGlmICghJCh0aGlzKS5oYXNDbGFzcyhcInNob3ctYWxsXCIpKSB7XG5cdFx0XHR2YXIgdGVybSA9ICQodGhpcykuYXR0cihcImRhdGEtaWRcIik7XG5cdCAgICBcdCQoXCIud29yay1waWVjZXNcIikuaGlkZSgpO1xuXHQgICAgXHQkKFwiLlwiK3Rlcm0pLmZhZGVJbigpO1xuICAgIFx0fSBlbHNlIHtcbiAgICBcdFx0JChcIi53b3JrLXBpZWNlc1wiKS5mYWRlSW4oKTtcbiAgICBcdH1cbiAgICBcdFxuICAgIH0pXG5cblxuXG5cbn0pO1xuXG4iXX0=

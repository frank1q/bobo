$(function(){
		// menu
    $(".content_lc").find('ul:first').hide(1000);
	$(".content_lc").mouseover(function() {
        $(this).find('ul:first').show(400);
    }); 
    $(".content_lc").mouseleave(function() { 
         $(this).find('ul:first').hide(400);
    }); 


	// menu
	$(".sub_c").mouseover(function() {
        $(this).find('ul').show(400);
    }).mouseleave(function() {
        $(this).find('ul').hide(400);
    }); 
    // *menu
    
})
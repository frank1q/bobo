(function($){
    $.fn.hoverDelay = function(options){
        var defaults = {
            hoverDuring: 1000,
            outDuring: 2000,
            hoverEvent: function(){
                $.noop();
            },
            outEvent: function(){
                $.noop();
            }
        };
        var sets = $.extend(defaults,options || {});
        var hoverTimer, outTimer, that = this;
        return $(this).each(function(){
            $(this).hover(function(){
                clearTimeout(outTimer);
                hoverTimer = setTimeout(function(){sets.hoverEvent.apply(that)}, sets.hoverDuring);
            },function(){
                clearTimeout(hoverTimer);
                outTimer = setTimeout(function(){sets.outEvent.apply(that)}, sets.outDuring);
            });    
        });
    }      
})(jQuery);





$(function(){
		// menu
    $(".content_lc").find('ul:first').hide(1000);
	$(".content_lc").mouseover(function() {
        var that = $(this);
        $(this).hoverDelay({
            hoverEvent: function(){
                that.find('ul:first').show(400)    
            },
            outEvent: function(){
                that.find('ul:first').hide(400);
            }
        });
    });
    $(".content_lc").hover(function() {
        $(this).find('ul:first').show(400);
<<<<<<< HEAD
        // $(this).unbind("hover"); //移除click
    })
    $(".sub_c").mouseover(function() {
        var that_sub_c = $(this);
        $(this).hoverDelay({
            hoverEvent: function(){
                that_sub_c.find('ul:first').show(400)    
            },
            outEvent: function(){
                that_sub_c.find('ul:first').hide(400);
            }
        });
    });
    $(".sub_c").hover(function() {
        $(this).find('ul:first').show(400);
        // $(this).unbind("hover"); //移除click
    })
=======
    });
    $(".content_lc").mouseleave(function() { 
         $(this).find('ul:first').hide(400);
    }); 

>>>>>>> a2a8f2da76ba9182fa8b86eb819cd51842c92305

	// menu
/*	$(".sub_c").mouseover(function() {
        $(this).find('ul').show(400);
    }).mouseleave(function() {
        $(this).find('ul').hide(400);
    }); */
    // *menu

<<<<<<< HEAD
    
=======
>>>>>>> a2a8f2da76ba9182fa8b86eb819cd51842c92305
})
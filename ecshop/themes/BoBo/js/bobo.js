(function($){
    $.fn.hoverDelay = function(options){
        var defaults = {
            hoverDuring: 100,
            outDuring: 100,
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
	$(".content_lc").mouseover(function() {
        // alert(1);
        var that = $(this);
        $(this).hoverDelay({
            hoverEvent: function(){
                that.find('.sontree').show(400)    
            },
            outEvent: function(){
                that.find('.sontree').hide(200);
            }
        });
    });
    $(".content_lc").hover(function() {
        $(this).find('.sontree').show(400);
        // $(this).unbind("hover"); //移除click
    })


    $('.imgSub').click(function(){
        var keywords = $('#keywords').val();
        keywords = $.trim(keywords);
        if(keywords ==''){
            alert('not to empty');
            return false;
        }
        $('#searchForm').submit();
    })

    $(".model").mouseover(function() {
        var that = $(this);
        $(this).hoverDelay({
            hoverEvent: function(){
                $('.share').show(400); 
            },
            outEvent: function(){
                $('.share').hide(400);
            }
        });
    });
    $('.model').hover(function(){
        $('.share').show(400);
    })
    $('.basket-checkout').addClass('menu_top');
    $('.basket-checkout').click(function(){
        var b = $(this).attr('is_back');
        if(b==1){
            $('.basket-checkout').removeClass('menu_top');
            $(this).attr('is_back',0);
        }
        else{
            $('.basket-checkout').addClass('menu_top');
            $(this).attr('is_back',1);
        }
        
        // $(this).addClass('menu_top');
    })
})
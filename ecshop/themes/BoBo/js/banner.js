$(function(){
    var index = 0;
    var len = $(".sliderbox > li").length;
    var sliderTimer;
    // for(var i=1; i<=len; i++){$(".slidernav").append('<li><a href="#">'+i+'</a></li>');}
    for(var j=0; j<len; j++){
    var title = $(".sliderbox li:eq("+j+") img").attr("alt");
    var url = $(".sliderbox li:eq("+j+") a").attr("href");
    // $(".slidertext").append('<li><a href="'+url+'">'+title+'</a></li>');
    }

    $(".slidernav li").mouseover(function(){
    index = $(".slidernav li").index(this);
    showImg(index);
    $(this).children("a").click(function(){return false;});
    }).eq(0).mouseover();
    if(len<=1){$("#slider .prev, #slider .next").hide();}
    //prev
        $("#slider .prev").click(function(){
            index -= 1;
            if(index == -1){index = len -1};
            showImg(index);
        });
        //next
        $("#slider .next").click(function(){
            index += 1;
            if(index == len){index = 0};
            showImg(index);
        });

    $(".slider").hover(function(){
    clearInterval(sliderTimer);
    },function(){
    sliderTimer = setInterval(function(){
    showImg(index);
    index++;
    if(index == len){index=0;}
    },6000);
    }).trigger("mouseleave");
    function showImg(index){
    var sliderHeight = $(".slider").height();
    $(".sliderbox").stop(true,false).animate({"top":-sliderHeight*index},"slow");
    $(".slidernav li").removeClass("current").eq(index).addClass("current");
    $(".slidertext li").hide().eq(index).show();
    }

    var indexa = 0;
    var lena = $(".sliderboxa > li").length;
    var sliderTimera;
    // for(var i=1; i<=len; i++){$(".slidernav").append('<li><a href="#">'+i+'</a></li>');}
    for(var ja=0; ja<lena; ja++){
    var titlea = $(".sliderboxa li:eq("+ja+") img").attr("alt");
    var urla = $(".sliderboxa li:eq("+ja+") a").attr("href");
    // $(".slidertext").append('<li><a href="'+url+'">'+title+'</a></li>');
    }

    $(".slidernava li").mouseover(function(){
    indexa = $(".slidernava li").index(this);
    showImga(indexa);
    $(this).children("a").click(function(){return false;});
    }).eq(0).mouseover();
    if(lena<=1){$("#slidera .preva, #slidera .nexta").hide();}
    //prev
        $("#slidera .preva").click(function(){
            indexa -= 1;
            if(indexa == -1){indexa = len -1};
            showImga(indexa);
        });
        //next
        $("#slidera .nexta").click(function(){
            indexa += 1;
            if(indexa == lena){indexa = 0};
            showImga(indexa);
        });

    $(".slidera").hover(function(){
    clearInterval(sliderTimera);
    },function(){
    sliderTimera = setInterval(function(){
    showImga(indexa);
    indexa++;
    if(indexa == lena){indexa=0;}
    },6000);
    }).trigger("mouseleave");
    function showImga(indexa){
    var sliderHeight = $(".slidera").height();
    $(".sliderboxa").stop(true,false).animate({"top":-sliderHeight*indexa},"slow");
    $(".slidernava li").removeClass("current").eq(indexa).addClass("current");
    $(".slidertexta li").hide().eq(indexa).show();
    }
})
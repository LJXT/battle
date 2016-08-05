/**
 * Created by Liu Tong on 2016/7/23.
 */
$(function(){
    $(".index_nav_u2").hide();
    $(".index_nav_ul li").hover(function(){
        $(this).css({"border-bottom":"2px solid #27D0D0"})
        $(".index_nav_u2").show().css({height:"210px"},2000);
    },function(){
        $(this).css({"border-bottom":"none"});
    })
    $(".index_nav_u2 a").hover(function(){
        $(this).css({background:" url('images/navBg.png')0 -300px",width:"119px"})
    },function(){
        $(this).css({background:"none"})

    });
    $(".index_nav_u2").mouseleave(function(){
        $(".index_nav_u2").hide();
    });
    // $(".index_nav_ul").mouseleave(function(){
    //     $(".index_nav_u2").hide();
    // });
});
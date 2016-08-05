/**
 * Created by Liu Tong on 2016/7/14.
 */

onload=function () {
    var video_bg=document.getElementById("video_bg");
    var wrap_width=document.documentElement.clientWidth;
    var wrap_height=document.documentElement.clientHeight;
    video_bg.style.left=(wrap_width-1920)/2+"px";
    video_bg.style.top=((wrap_height-1080)/2-30)+"px";
    $(function(){
        var timmer;
        function fun1(){
            $(".roll_left_ul").animate({"left":"-560px"},800,function(){
                $(".roll_left_ul").append($(".roll_left_ul li:first"));
                $(".roll_left_ul").css({left:"0"});
            });
            $(".roll_right_ul").animate({"top":"-90px"},800,function(){
                $(".roll_right_ul").append($(".roll_right_ul li:first"));
                $(".roll_right_ul").css({top:"0px"});
            });
        }
        timmer=setInterval(fun1,3000);
        $(".index_roll").hover(function(){
            clearInterval(timmer);
        },function(){
            timmer=setInterval(fun1,3000);
        });
        $(".roll_right_ul li img").click(function(){
            $(this).css({border:" 4px solid #16B6B6",height:"82px",width:"132px"})
            $(this).parent().siblings().children().css({border:"none",height:"90px",width:"140px"})
            var i=$(this).parent().index();
            $(".roll_left_ul").animate({"left":-560*i+"px"},800);
        });
    });
    $(function(){
        $(".index_tap_1").hover(function(){
            $(".tap_bg").css({opacity:"1"},200);
            $(".index_tap_text").animate({top:"20px"},200)
        },function (){
            $(".tap_bg").css({opacity:"0"},200);
            $(".index_tap_text").animate({top:"40px"},200)
        });
        $(".index_tap_2").hover(function(){
            $(".tap2_bg").css({opacity:"1"},200);
            $(".index_tap2_text").animate({top:"20px"},200)
        },function (){
            $(".tap2_bg").css({opacity:"0"},200);
            $(".index_tap2_text").animate({top:"40px"},200)
        });
        $(".index_tap_3").hover(function(){
            $(".tap3_bg").css({opacity:"1"},200);
            $(".index_tap3_text").animate({top:"20px"},200)
        },function (){
            $(".tap3_bg").css({opacity:"0"},200);
            $(".index_tap3_text").animate({top:"40px"},200)
        });
    });

}
window.onresize = function(){
    var video_bg=document.getElementById("video_bg");
    var wrap_width=document.documentElement.clientWidth;
    var wrap_height=document.documentElement.clientHeight;
    if(wrap_width>=1000){
        video_bg.style.left=(wrap_width-1920)/2+"px";
    }
    video_bg.style.top=((wrap_height-1080)/2-30)+"px";
}
function voice_ctr() {
    var player = document.getElementById("index_bg");
    var me = document.getElementById("voice_ctr");
    player.muted = !player.muted;
    if(player.muted){
        me.style.backgroundImage="url('images/voice_no_bg.png')";
    }
    else{
        me.style.background="url('images/voice_bg.png')";
    }
}





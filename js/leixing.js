/**
 * Created by Liu Tong on 2016/7/18.
 */
onload=function () {
    $(function () {
        $(".mainbody ul li").click(function () {
            var t = $(this).index();
            $(this).addClass("li_checked");
            $(this).siblings().attr("class","");
            $(".img_content").eq(t).css({display:"block"});
            $(".img_content").eq(t).siblings().css({display:"none"});
            $(".img_content").eq(t).animate({opacity:"1"},300);
            $(".img_content").eq(t).siblings().animate({opacity:"0"},300);
        });
    });
}
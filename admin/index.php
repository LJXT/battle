<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include("isLogin.php");?>
<div class="wrap body_bg">
    <div class="index">
        <div class="header"></div>
        <div class="mainbody">
            <div class="logo">管理页面</div>
            <div class="link_content">
                <a href="change_country.php" class="content_tab" title="系别管理">
                    <span>country</span>
                    <p>系别管理</p>
                </a>
                <a href="change_kind.php" class="content_tab" title="类型管理">
                    <span>kind</span>
                    <p>类型管理</p>
                </a>
                <a  class="content_tab" title="舰船管理">
                    <span>battle</span>
                    <p>舰船管理</p>
                </a>
                <a class="content_tab" title="其他" style="margin-right: 0px">
                    <span>others</span>
                    <p>其他</p>
                </a>
            </div>
        </div>
        <div class="clear_float"></div>
        <div class="footre"></div>
    </div>
</div>
</body>
</html>
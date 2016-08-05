<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body class="body_bg">
<?php include("header.html");?>
<div class="change_country_mainbody">
    <div class="change_country_left">
        <ul>
            <li>战舰类型信息修改</li>
            <li><a href="change_country.php?type=add">增加类型</a></li>
            <li><a href="change_country.php?type=delete">删除类型</a></li>
            <li><a href="change_country.php?type=modify">修改类型</a></li>
        </ul>
    </div>
    <div class="change_country_right">
        <?php
        $page = isset($_GET['type']) ? trim(strtolower($_GET['type'])) : "add";
        $allowedPages = array(
            'add'     => './add.php',
            'modify'  => './modify.php',
            'delete'  => './delete.php'
        );
        include(isset($allowedPages[$page]) ? $allowedPages[$page] : $allowedPages['add']);
        ?>
    </div>
    <script type="text/javascript">
        var v1 = document.getElementsByClassName("change_country_left");
        var lis = document.getElementsByTagName("li");
        lis[
        <?php
        $page = isset($_GET['type']) ? trim(strtolower($_GET['type'])) : "add";
        $allowedPages = array(
            'add'     => 1,
            'delete'  => 2,
            'modify'  => 3
        );
        echo (isset($allowedPages[$page]) ? $allowedPages[$page] : $allowedPages['add']);
        ?>
        ].className="change_country_lefts"
    </script>
<div class="clear_float"></div>
</div>
<script src="../js/delete_country.js"></script>
</body>
</html>
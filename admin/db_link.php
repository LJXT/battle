<?php
    header("Content-type:text/html;charset=utf-8");
	$db_link=mysql_connect("127.0.0.1","root","admin");
	$db=mysql_select_db("web",$db_link);
	mysql_query("SET NAMES UTF8")
?>

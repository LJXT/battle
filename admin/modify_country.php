<?php
header("Content-type:text/html;charset=utf-8");
$del_id=$_GET['del_id'];
$v_country_name=$_REQUEST["country_name"];
$db_link=mysql_connect("localhost","root","admin");
$db=mysql_select_db("web",$db_link);
$sql="UPDATE from country_information SET country_name='$v_country_name'where country_id=$del_id";
mysql_query("SET NAMES UTF8");
$result=mysql_query($sql,$db_link);
if(!empty($result)){
    echo "success";
}else{
    echo "$sql";
}
?>
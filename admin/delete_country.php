<?php
$del_id=$_GET['del_id'];
		include("db_link.php");
$sql="delete from country_information where country_id=$del_id";
mysql_query("SET NAMES UTF8");
$result=mysql_query($sql,$db_link);
if(!empty($result)){
    echo "success";
}else{
    echo "$sql";
}
?>
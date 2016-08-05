
<?php
		include("db_link.php");

$sql="select *from country_information";
$result=mysql_query($sql,$db_link);
//对结果集合出理
$arr2=array();
while($v1=mysql_fetch_array($result))
{
    $arr1=array('country_id'=>$v1['country_id'],'country_name'=>$v1['country_name']);
    //想数组中添加内容
    array_push($arr2,$arr1);
}
//json {key:value,key:value...}
echo json_encode($arr2);
?>
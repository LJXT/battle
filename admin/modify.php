<link rel="stylesheet" href="css/style.css" type="text/css">
<script src="js/modify_country.js"></script>
<div id="modify_country">
	<table border="1px">
		<tr><td width="100">国家ID</td><td width="100">国家名称</td><td width="100">操作</td></tr>
	<?php
		header("Content-type:text/html;charset=utf-8");
		$db_link=mysql_connect("127.0.0.1","root","admin");
		$db=mysql_select_db("web",$db_link);
		mysql_query("SET NAMES UTF8");
		$sql="select *from country_information";
		$result=mysql_query($sql,$db_link);
		while($v1=mysql_fetch_array($result))
		{
	?>
	<tr>
		<td><?php echo $v1['country_id'];?></td>
		<td><?php echo $v1['country_name'];?></td>
		<td><a href="javascript:delete_country(<?php echo $v1['country_id'];?>)">修改</a></td>

	</tr>
	<?php
	}
	?>
	</table>
</div>
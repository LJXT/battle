<link rel="stylesheet" href="css/style.css" type="text/css">
<script src="js/delete_country.js"></script>
<div id="delete_country">
	<table border="1px">
		<tr><td width="200">国家ID</td><td width="300">国家名称</td><td width="100">操作</td></tr>
	<?php
		include("db_link.php");

		$sql="select *from country_information";
		$result=mysql_query($sql,$db_link);
		while($v1=mysql_fetch_array($result))
		{
	?>
	<tr>
		<td><?php echo $v1['country_id'];?></td>
		<td><?php echo $v1['country_name'];?></td>
		<td><a href="javascript:delete_country(<?php echo $v1['country_id'];?>)">删除</a></td>
	
	</tr>
	<?php
	}
	?>
	</table>
</div>
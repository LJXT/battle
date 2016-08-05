<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>战舰系别</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<?php
	include("db_link.php");
	$sql="select *from country_information";
	$result=mysql_query($sql,$db_link);
?>
<body>
	<div class="a_wrap">
		<div class="xibie">
			<div class="header"></div>
			<div class="title"><h2>战舰系别</h2></div>
			<div class="mainbody">
			    <!-- <div class="xibie_num">数据库中共有<?php echo mysql_num_rows($result);?>个国家</div> -->
				<?php
				while ($v1=mysql_fetch_array($result)) {
				?>
				<div class="content">
                    <h2><a href="#"><?php echo $v1['country_name'];?></a></h2><div><a href="wiki/xibie.php?country_id=<?php echo $v1['country_id'];?>">查看该国家所有船只</a></div>
                    <div class="clear_float"></div>
                    <hr>
                    <div class="flag">
                        <img src="<?php echo $v1['country_flag'];?>"  height="100px">
                    </div>
                    <div class="text">
                    	<p><?php readfile($v1['country_history']);?></p>
                    </div>
                    <img src="<?php echo $v1['country_picture'];?>" width="1000px">
                    <h4><?php echo $v1['country_typical'];?></h4>
				</div>
				<?php
				}
				?>

            </div>
		</div>
	</div>
</body>
</html>
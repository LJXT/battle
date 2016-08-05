<link href="css/style.css" rel="stylesheet" type="text/css">
<?php
	session_start();
	if ($_SESSION['admin_id']==""||$_SESSION['admin_name']=="") {
		header("Location: login.html");
	}else{
    	include("../db_link.php");
    	$sql="SELECT * FROM admin WHERE admin_id = '".$_SESSION['admin_id']."' && admin_name = '".$_SESSION['admin_name']."'";
    	$result=mysql_query($sql,$db_link);
    	if(mysql_num_rows($result)<1){
			header("Location: login.html");
    	}else{
?>
			<div class="isLogin" >登录账号:<?php echo $_SESSION['admin_name']?><a href="logout.php">登出</a></div>
<?php
    	}
	}

?>
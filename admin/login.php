<?php
        header("Content-type:text/html;charset=utf-8");
        $v_uname=$_REQUEST["uname"];
        $v_upsd=$_REQUEST["upsd"];
        $db_link=mysql_connect("localhost","root","admin");
        $db=mysql_select_db("web",$db_link);
        $sql="select * from  admin where admin_name='$v_uname' and admin_pwd='$v_upsd'";
        $result=mysql_query($sql,$db_link);
        if($v1=mysql_fetch_array($result)){
            session_start();
            $_SESSION['admin_id']=$v1['admin_id'];
            $_SESSION['admin_name']=$v1['admin_name'];
            echo "成功";
        }else{
           echo "失败";
        }
?>
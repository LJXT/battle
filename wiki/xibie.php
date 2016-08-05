<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<?php
    include("../db_link.php");
    $country_id=$_GET['country_id'];
?>
<body>
<div class="wrap">
    <div class="xibie">
        <div class="header"></div>
        <div class="mainbody">
            <div class="content">
                <div class="zhanliejian">
                    <div class="kind_name">战列舰<img src="images/kind_jiantou.jpg"></div>
                    <ul>
                    <?php 
                        $sql="select * from battleship where battleship_kind='BB' && battleship_country = '".$country_id."'";
                        $result=mysql_query($sql,$db_link);
                        if(mysql_num_rows($result)<1){
                            echo "<li><a>数据库中暂无此项</a></li>";
                        }
                        else{
                            while ($v1=mysql_fetch_array($result)) {
                    ?>
                        <li>
                            <a href="#"><img src="<?php echo $v1['battleship_ico'];?>"><p><?php echo $v1['battleship_name'];?></p></a></li>
                        </li>
                    <?php   
                            }
                        }
                    ?>
                    </ul>
                </div>
                <div class="hangkongmujian">
                    <div class="kind_name">航空母舰<img src="images/kind_jiantou.jpg"></div>
                    <ul>
                    <?php 
                        $sql="select * from battleship where battleship_kind='CV' && battleship_country = '".$country_id."'";
                        $result=mysql_query($sql,$db_link);
                        if(mysql_num_rows($result)<1){
                            echo "<li><a>数据库中暂无此项</a></li>";
                        }
                        else{

                            while ($v1=mysql_fetch_array($result)) {
                    ?>
                        <li>
                            <a href="#"><img src="<?php echo $v1['battleship_ico'];?>"><p><?php echo $v1['battleship_name'];?></p></a></li>
                        </li>
                    <?php   
                            }
                        }
                    ?>
                    </ul>
                </div>
                <div class="quzhujian">
                    <div class="kind_name">驱逐舰<img src="images/kind_jiantou.jpg"></div>
                    <ul>
                    <?php 
                        $sql="select * from battleship where battleship_kind='DD' && battleship_country = '".$country_id."'";
                        $result=mysql_query($sql,$db_link);
                        if(mysql_num_rows($result)<1){
                            echo "<li><a>数据库中暂无此项</a></li>";
                        }
                        else{

                            while ($v1=mysql_fetch_array($result)) {
                    ?>
                        <li>
                            <a href="#"><img src="<?php echo $v1['battleship_ico'];?>"><p><?php echo $v1['battleship_name'];?></p></a></li>
                        </li>
                    <?php   
                            }
                        }
                    ?>
                    </ul>
                </div>
                <div class="xunyangjian">
                    <div class="kind_name">巡洋舰<img src="images/kind_jiantou.jpg"></div>
                                        <ul>
                    <?php 
                        $sql="select * from battleship where battleship_kind='CA' && battleship_country = '".$country_id."'";
                        $result=mysql_query($sql,$db_link);
                        if(mysql_num_rows($result)<1){
                            echo "<li><a>数据库中暂无此项</a></li>";
                        }
                        else{

                            while ($v1=mysql_fetch_array($result)) {
                    ?>
                        <li>
                            <a href="#"><img src="<?php echo $v1['battleship_ico'];?>"><p><?php echo $v1['battleship_name'];?></p></a></li>
                        </li>
                    <?php   
                            }
                        }
                    ?>
                    </ul>

                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>
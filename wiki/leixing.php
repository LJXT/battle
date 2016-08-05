<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<?php
    include("../db_link.php");
    $battle_kind=$_GET['battle_kind'];
?>
<body>
<div class="wrap">
    <div class="leixing">
        <div class="header"></div>
        <div class="mainbody">
            <div class="content">
                <?php
                    $sql="SELECT * FROM country_information";
                    $result=mysql_query($sql,$db_link);
                    while ($v1=mysql_fetch_array($result)) {
                ?>
                    <div class="content_block">
                        <img class="country_flag" src="<?php echo '../'.$v1["country_flag"];?>" height="100"><div class="country_name"><?php echo $v1["country_name"];?><img src="images/kind_jiantou.jpg"></div>
                        <ul>
                            <?php
                                $sql="SELECT * FROM battleship WHERE battleship_country = ".$v1["country_id"]." &&battleship_kind = '".$battle_kind."'";
                                $result2=mysql_query($sql,$db_link);
                                if(mysql_num_rows($result2)<1){
                                    echo "<li><a>数据库中暂无此项</a></li>";
                                }
                                else{
                                    
                                while ($v2=mysql_fetch_array($result2)) {
                            ?>
                                <li>
                                    <a href=""><img src="<?php echo $v2["battleship_ico"];?>"><p><?php echo $v2["battleship_name"];?></p></a>
                                </li>
                            <?php
                                }}
                            ?>

                            
                        </ul>
                    </div>
                <?php
                    }
                    
                ?>
            </div>
        </div>
        <div class="footer"></div>
    </div>
</div>
</body>
</html>
<?php
header("Content-type:text/html;charset=utf-8");
$v_country_id=$_REQUEST["del_id"];
$db_link=mysql_connect("localhost","root","admin");
$db=mysql_select_db("web",$db_link);
mysql_query("SET NAMES UTF8");
$sql="select * from country_information where country_id='$v_country_id'";
$result=mysql_query($sql,$db_link);
if($v1=mysql_fetch_array($result)){
?>
<div>
    <div>国家id<?php echo $v1["country_id"]?></div>
    <div>国家名称<?php echo $v1["country_name"]?></div>
    <div>国家国旗<img src="<?php echo $v1['country_flag']?>" style="border: 1px solid red"></div>
    <div>国家历史<img src="<?php echo $v1['country_history']?>" style="border: 1px solid red"></div>
    <div>国家图片<img src="<?php echo $v1['country_picture']?>" style="border: 1px solid red"></div>
</div>
<div id="add_country">
            <form action="#" method="post" enctype="multipart/form-data">
            <div class="country_input_text">国家名称：<input type="text" class="input_text" id="country_name_id" name="country_name"></div>
            <div class="country_input_file">国家历史：<input type="file" class="input_file" id="country_history_txt" name="country_history"></div>
            <div class="country_input_file">国家国旗：<input type="file" class="input_file" id="country_flag_img" name="country_flag"></div>
            <div class="country_input_file">国家图片：<input type="file" class="input_file" id="country_picture_img" name="country_picture"></div>
            <input class="country_input_submit"type="submit" value="确认修改">
        </form>
        </div>
</body>
</html>
<?php
}
else{
    echo "失败";
}
?>
<?php
if(!empty($_FILES)){
//p->picture f->flag h->history
    $tmp_pfilename=$_FILES["country_picture"]["tmp_name"];
    $f_pname=$_FILES["country_picture"]["name"];
    $f_psize=$_FILES["country_picture"]["size"];
    $f_ptype=$_FILES["country_picture"]["type"];

    $tmp_hfilename=$_FILES["country_history"]["tmp_name"];
    $f_hname=$_FILES["country_history"]["name"];
    $f_hsize=$_FILES["country_history"]["size"];
    $f_htype=$_FILES["country_history"]["type"];

    $tmp_ffilename=$_FILES["country_flag"]["tmp_name"];
    $f_fname=$_FILES["country_flag"]["name"];
    $f_fsize=$_FILES["country_flag"]["size"];
    $f_ftype=$_FILES["country_flag"]["type"];
    if($f_psize>0 && $f_hsize>0 && $f_fsize>0){
    if(($f_ptype=="image/jpeg"||$f_ptype=="image/png")&&($f_ftype=="image/jpeg"||$f_ftype=="image/png")){

            $upfile1=move_uploaded_file($tmp_pfilename,"images/".$f_pname);
            $upfile2=move_uploaded_file($tmp_ffilename,"images/".$f_fname);
            $upfile3=move_uploaded_file($tmp_hfilename,"images/".$f_hname);
            if($upfile1==true&&$upfile2==true&&$upfile3==true){
                insertpro("");
             }else{ echo "修改失败";}
            }
    }
    else{
        echo "1失败";
    }
}
 function insertpro($v){
                $v_country_name=$_REQUEST['country_name'];
                $f_pname=$_FILES["country_picture"]["name"];
                $f_hname=$_FILES["country_history"]["name"];
                $f_fname=$_FILES["country_flag"]["name"];
                $v_country_id=$_REQUEST["del_id"];
                $vfilep="images/".$f_pname;
                $vfilef="images/".$f_fname;
                $vfileh="images/".$f_hname;
                $db_link=mysql_connect("127.0.0.1","root","admin");
                $db=mysql_select_db("web",$db_link);
                $sql="update country_information set country_name=,$v_country_name',country_flag='$vfilef',country_history='$vfileh',country_picture='$vfilep' where country_id=$v_country_id";
                mysql_query("SET NAMES UTF8");
                $result=mysql_query($sql,$db_link);
                if(!empty($result)){
                   echo "成功";
                }else{
                   echo "$sql";
                }

 }

?>
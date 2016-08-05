<?php
header("Content-type:text/html;charset=utf-8");
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

            $upfile1=move_uploaded_file($tmp_pfilename,"../country/".$f_pname);
            $upfile2=move_uploaded_file($tmp_ffilename,"../country/".$f_fname);
            $upfile3=move_uploaded_file($tmp_hfilename,"../country/".$f_hname);
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
                $v_country_picture_txt=$_REQUEST['country_picture_txt'];
                $f_pname=$_FILES["country_picture"]["name"];
                $f_hname=$_FILES["country_history"]["name"];
                $f_fname=$_FILES["country_flag"]["name"];
                $vfilep="country/".$f_pname;
                $vfilef="country/".$f_fname;
                $vfileh="country/".$f_hname;

                include("db_link.php");

                $sql="insert into country_information(country_name,country_flag,country_history,country_picture,country_typical) values('$v_country_name','$vfilef','$vfileh','$vfilep','$v_country_picture_txt')";
                mysql_query("SET NAMES UTF8");
                $result=mysql_query($sql,$db_link);
                if(!empty($result)){
                   echo "成功";
                }else{
                   echo "2失败";
                   echo $sql;
                }

 }

?>

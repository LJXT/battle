/**
 * Created by JiangXue on 2016/7/4.
 */
function createXHR(){
    var XHRequest;
    if(window.XMLHttpRequest){
        XHRequest=new XMLHttpRequest();
    }else if(window.ActiveXObject){
        try{
            XHRequest=new ActiveXObject("Msxml2.XMLHTTP");
        }catch(e){
            XHRequest=new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return XHRequest
}
function delete_country(id){
    var XHR = createXHR();
    var v_url = "delete_country.php?del_id="+id;
    XHR.open("get",v_url,true);
    XHR.onreadystatechange = function (){
        if (XHR.readyState == 4 && XHR.status == 200){
            var str = XHR.responseText;
            if(str == "success"){
                alert("删除成功!");
                window.location.href="change_country.php?type=delete";
            }
        }
    }
    XHR.send();
}
// function modifyfun(){
//     var XHR = createXHR();
//     var v_url = "delete_country.php";
//     XHR.open("get",v_url,true);
//     XHR.onreadystatechange = function (){
//         if (XHR.readyState == 4 && XHR.status == 200){
//             var str = XHR.responseText;
//             var json_v = eval(str);
//             var s="<table><tr><td>国家ID</td><td>国家名称</td><td>操作</td></tr>";
//             for(var i=0;i<json_v.length;i++){
//                 s=s+"<tr><td>"+json_v[i].country_id+" "+"</td>"+
//                     "<td>"+json_v[i].country_name+" "+"</td>"+
//                     "<td>"+"<a href='modify_country02.php?del_id="+json_v[i].country_id+"'>修改</a>" + "</td></tr>";
//
//             }
//             s=s+"</table>"
//             document.getElementById("delete_country").innerHTML=s;
//         }
//     }
//     XHR.send();
// }
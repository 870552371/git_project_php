<?php
header("Content-type:text/html;charset=utf-8"); //设置文件编码格式
include_once("../A_public/code/conn/conn.php");//包含数据库连接文件
if($_POST['action'] == "update"){
    if(!($_POST['bookname'] and $_POST['price'] and $_POST['f_time'] and $_POST['type'] and $_POST['type1'] )){
        echo "输入不允许为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
    }else{
        echo $_POST['id'];
        $sqlstr = "update xsmd$ set 
        姓名 = '".$_POST['bookname']."', 
        性别 = '".$_POST['price']."', 
        专业 = '".$_POST['f_time']."', 
        班级代号 = '".$_POST['type']."' ,
        总成绩 = '".$_POST['type1']."'
        where 考生号 = ".$_POST['id'];//定义更新语句
        $result = mysqli_query($conn,$sqlstr);//执行更新语句
        if($result){
            echo "修改成功,点击<a href='../index.php'>这里</a>查看";
        }else{
            echo "修改失败.<br>$sqlstr";
        }
    }
}
?>
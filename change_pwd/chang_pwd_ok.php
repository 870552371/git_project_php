<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2019/5/25
 * Time: 0:47
 */
session_start();
if (!($_POST['password'] and  $_POST['tel'] and  $_POST['password_c'] and $_POST['password_s'])){
    echo "输入不允许为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回<br>";
}else if ($_POST['password_c']!=$_POST['password_s']){
    echo "两次密码不一致，请重新确认。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回<br>";
}
else{
    include_once("../A_public/code/conn/conn.php");
    $password=$_POST['password'];
    $tel=$_POST['tel'];
    $password_s=$_POST['password_s'];
    $password_c=$_POST['password_c'];
    $id=$_SESSION['id'];
    $sql_change = "UPDATE USER SET u_password = '".$password_s."' WHERE u_password='".$password."' AND u_id='".$id."'";
    $data = mysqli_query($conn, $sql_change);
    $sql_select = "select * from user"." WHERE  u_tel='".$tel."' AND u_password ='".$password_c."' AND u_id='".$id."'";
    $data2=mysqli_query($conn,$sql_select);
    $data2_v=mysqli_fetch_row($data2);
    if (isset($data2_v)){
        echo '<script>alert("修改成功，重新登录！");
window.location.href="../login.php";
</script>';
//         echo '更新语句:'.$sql_iforget."<br>";
//         echo "查询语句:".$sql_select."<br>";
//         echo isset($data2_v);
//         echo "更新结果:".print_r($data)."<br>";
//         echo "查询结果:".print_r($data2)."<br>";

    } else {
//        echo '<script>alert("修改失败,重新输入！");
//window.location.href="chang_p.php";
//</script>';
        echo '更新语句:'.$sql_change."<br>";
        echo "查询语句:".$sql_select."<br>";
        echo isset($data2_v);
        echo "更新结果:".print_r($data)."<br>";
        echo "查询结果:".print_r($data2)."<br>";
    }
}
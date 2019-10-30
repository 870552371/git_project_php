<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2019/5/25
 * Time: 0:37
 */
if (!($_POST['username'] and  $_POST['tel'] and  $_POST['answer'] and $_POST['password_c'])){
    echo "输入不允许为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回<br>";
}else {
    include_once("../A_public/code/conn/conn.php");
    $usermame=$_POST['username'];
    $tel=$_POST['tel'];
    $answer=$_POST['answer'];
    $password_c=$_POST['password_c'];
    $sql_iforget = "UPDATE USER SET u_password = '".$password_c."' WHERE u_name='".$usermame."' AND u_tel='".$tel."' AND u_answer='".$answer."'";
    $data = mysqli_query($conn, $sql_iforget);
    $sql_select = "select * from user"." WHERE u_name='".$usermame."' AND u_tel='".$tel."' AND u_answer='".$answer."'";
    $data2=mysqli_query($conn,$sql_select);
    $data2_v=mysqli_fetch_row($data2);
    if (isset($data2_v)){
        echo '<script>alert("找回成功，请重新登录！");
    window.location.href="../login.php";
</script>';
//         echo '更新语句:'.$sql_iforget."<br>";
//         echo "查询语句:".$sql_select."<br>";
//         echo isset($data2_v);
//         echo "更新结果:".print_r($data)."<br>";
//         echo "查询结果:".print_r($data2)."<br>";

    } else {
        echo '<script>alert("修改失败,重新输入！");
window.location.href="../iforgot.php";
</script>';
        echo "".$sql_iforget;
    }
}
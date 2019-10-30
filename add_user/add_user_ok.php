<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2019/5/25
 * Time: 0:36
 */

if (!($_POST['username'] and $_POST['password'] and $_POST['password_s'] and $_POST['tel'] and $_POST['question'] and $_POST['answer'] and $_POST['total'])){
    echo $_POST['username'].$_POST['password'].$_POST['password_s'].$_POST['tel'].$_POST['question'].$_POST['answer'].$_POST['total'];
    echo "输入不允许为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回<br>";
}else if ($_POST['password']!=$_POST['password_s']){
    echo "两次密码不一致，请重新确认。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回<br>";
}else {
    include_once("../A_public/code/conn/conn.php");
    $usermame=$_POST['username'];
    $password=$_POST['password'];
    $password_s=$_POST['password_s'];
    $tel=$_POST['tel'];
    $question=$_POST['question'];
    $answer=$_POST['answer'];
    $total=$_POST['total'];
    $sql_zhuce = "insert into user(u_name,u_password,u_tel,u_permission,u_question,u_answer,u_total) values('" . $usermame . "','" . $password_s . "','" . $tel . "','" . "0" . "','" . $question . "','" . $answer . "','" . $total . "')";
    $data = mysqli_query($conn, $sql_zhuce);
    if ($data) {
        echo "<script>
        alert('注册成功，请登录！');
        window.location.href='../login.php';
</script>";

    } else {
        echo "<script>
        alert('注册失败，请重新输入！');
        window.location.href='../login.php';
</script>";
    }
}
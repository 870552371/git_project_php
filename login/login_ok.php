<?php
include_once("../A_public/code/conn/conn.php");//包含数据库连接文件
?>
<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$sqlstr = "select * from user WHERE u_name = '$username' and u_password = '$password'";
$result = mysqli_query($conn,$sqlstr);
$rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
if($rows['u_permission']==='1'){
    $_SESSION['user']=$rows['u_total'];
    $_SESSION['id']=$rows['u_id'];
    $_SESSION['flag']=1;
    echo "<script>
//    alert('管理员登陆！');
	window.location.href='../index.php';
		  </script>";
}else if ($rows['u_permission']==='0'){
    $_SESSION['user']=$rows['u_total'];
    $_SESSION['id']=$rows['u_id'];
    $_SESSION['flag']=0;
    echo "<script>
//    alert('用户登陆成功！');
	window.location.href='../index.php';
		  </script>";
}
else{
    echo "<script>
	alert('未注册用户，请注册再使用！');
	window.location.href='../login.php';
		  </script>";
}
?>
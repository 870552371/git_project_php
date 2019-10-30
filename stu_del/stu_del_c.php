<?php
include_once("A_public/code/conn/conn.php");							//连接数据库
if ($_GET['action'] == "del") {                            //判断是否执行删除
$sqlstr1 = "delete from xsmd$ where 考生号 = " . $_GET['id'];        //定义删除语句
$result = mysqli_query($conn, $sqlstr1);                //执行删除操作
if ($result) {
echo "<script>alert('删除成功');location='index.php';</script>";
} else {
echo "删除失败";
}
}
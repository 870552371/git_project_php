<?php
session_start();
if (!isset($_SESSION['flag'])){
    echo "<script>
	alert('你没有访问权限！');
	window.location.href='login.php';
		  </script>";
}

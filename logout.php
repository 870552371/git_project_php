<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2019/5/24
 * Time: 12:40
 */

session_start();
session_unset();
session_destroy();

echo "<script>alert('您已退出登录！');location.href='login.php'</script>";
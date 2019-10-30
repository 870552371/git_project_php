<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="A_public/css/public.css" type="text/css">
    <link rel="stylesheet" href="A_public/js/bootstrap-multiselect-master/docs/css/bootstrap-3.3.2.min.css" type="text/css">
    <link rel="stylesheet" href="A_public/js/bootstrap-multiselect-master/docs/css/bootstrap-example.min.css" type="text/css">
    <link rel="stylesheet" href="A_public/js/bootstrap-multiselect-master/docs/css/prettify.min.css" type="text/css">

    <script type="text/javascript" src="A_public/js/bootstrap-multiselect-master/docs/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="A_public/js/bootstrap-multiselect-master/docs/js/bootstrap-3.3.2.min.js"></script>
    <script type="text/javascript" src="A_public/js/bootstrap-multiselect-master/docs/js/prettify.min.js"></script>

    <link rel="stylesheet" href="A_public/js/bootstrap-multiselect-master/dist/css/bootstrap-multiselect.css" type="text/css">
    <script type="text/javascript" src="A_public/js/bootstrap-multiselect-master/dist/js/bootstrap-multiselect.js"></script>
</head>
<body>
<div id="container">
<?php
session_start();
session_unset();
session_destroy();

include_once("A_public/module/head/head.php");
include_once("A_public/module/link/link.php");

echo "您已安全退出！";
?>
<button type="button"  onclick="del()">点击关闭页面</button>
<?php
include_once("A_public/module/foot/foot.php");
?>
</div>
</body>
<script>
function del() {
    window.location.href="about:blank";
    window.close();
    }
</script>
</html>
<link rel="stylesheet" href="A_public/module/head/head.css">
<div class="page-header head" style="height: 100px">
    <h1 class="h1 press" style="margin-top: 80px">&nbsp;&nbsp;&nbsp;信息管理系统</h1>
    <div class="navbar-right text-right" style="width: 30%; height: 90px;margin-right: 50px;margin-top: -20px">
    <?php if ($_SESSION['flag']===0|1 ): ?>
        <div ><?php echo "当前用户:".$_SESSION['user'];?></div>
        <div ><a href="change_pwd.php">修改密码</a></div>
        <div ><a href="logout.php">注销|登录</a></div>
    <?php endif ?>
        </div>
</div>
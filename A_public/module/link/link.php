<!--<link rel="stylesheet" href="A_public/module/link/link.css">-->
<div class="navbar-fixed-top link">
    <table class="table-bordered" width="100%"><tr style="height: 50px">
    <?php  $sion=$_SESSION['flag']; if($sion==1): ?>
        <td ><a  href="index.php" >浏览信息</a></td>
        <td ><a  href="stu_add.php" >添加学生</a></td>
        <td ><a  href="stu_sp_sea.php" >简单查询</a></td>
        <td ><a  href="stu_ht_sea.php" >高级查询</a></td>
        <td ><a  href="stu_gp_sea.php" >分组查询</a></td>
        <td ><a  href="exit.php" >退出系统</a></td>
    <?php endif ?>
    <?php  $sion=$_SESSION['flag']; if($sion===0): ?>
        <td ><a  href="index.php" >浏览信息</a></td>
        <td ><a  href="stu_sp_sea.php" >简单查询</a></td>
        <td ><a  href="stu_ht_sea.php" >高级查询</a></td>
    <?php endif ?>
    <?php if (!isset($_SESSION['flag'])): ?>
        <table width="100%" bgcolor="gray">
        <tr style="background-color: rgba(202,202,202,0.2);">
        <td height="50px" class="text-left" >
            <img src="A_public/icon/logo1.png" style="width: 270px; margin-left: 50px">
        </td>
        <td class="text-right">
                <h1 style="color:#dddddd ">信息管理系统<span style="padding: 50px"></h1>
        </td>
         </tr>
        </table>
        <hr>
    <?php endif ?>
        </tr></table>
</div>
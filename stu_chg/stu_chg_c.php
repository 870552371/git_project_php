<?php
include_once("A_public/code/conn/conn.php");//包含数据库连接文件
if($_GET['action'] == "update"){//判断地址栏参数action的值是否等于update
    $sqlstr = "select * from xsmd$ where 考生号 = ".$_GET['id'];//定义查询语句
    $result = mysqli_query($conn,$sqlstr);//执行查询语句
    $rows = mysqli_fetch_row($result);//将查询结果返回为数组
    ?>
<div class="main">
    <form name="intFrom" method="post" action="stu_chg/stu_chg_ok.php">

        <table class="table-bordered" width="100%">

            <tr>
                <td>姓名：</td>
                <td><input class="input-sm" type="text" name="bookname" value="<?php echo $rows['姓名'] ?>"></td>
            </tr>
            <tr>
                <td>性别：</td>
                <td><input class="input-sm" type="text" name="price" value="<?php echo $rows['性别'] ?>"></td>
            </tr>
            <tr>
                <td>专业：</td>
                <td><input class="input-sm" type="text" name="f_time" value="<?php echo $rows['专业'] ?>"></td>
            </tr>
            <tr>
                <td>班级代号：</td>
                <td><input class="input-sm" type="text" name="type" value="<?php echo $rows['班级代号'] ?>"></td>
            </tr>
            <td>总成绩：</td>
            <td><input class="input-sm" type="text" name="type1" value="<?php echo $rows['总成绩'] ?>"></td>
            </tr>
            <tr align="center" valign="middle">
                <td colspan="2" class="c_td">
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="id" value="<?php echo $rows[0] ?>">
                    <input class="btn" type="submit" name="Submit" value="修改">&nbsp;<input class="btn" type="reset" name="reset" value="重置"></td>
            </tr>
        </table>
    </form>
    <?php
}
?>
</div>

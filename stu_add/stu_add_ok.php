<div>
    <?PHP
    include_once("../A_public/code/conn/conn.php");
    $b_id = $_POST["b_id"];
    $b_name = $_POST["b_name"];
    $b_price = $_POST["b_price"];
    $b_date = $_POST["b_date"];
    $b_date1 = $_POST["b_date1"];
    $b_date2= $_POST["b_date2"];

    $sql = "insert into xsmd$ values('".$b_id."','".$b_name."','".$b_price."','".$b_date."','".$b_date1."','".$b_date2."')";
    echo $sql."<br>";
    $data = mysqli_query($conn,$sql);
    if($data){
        echo "<b style='color:red;'>学生《{$b_name}》添加成功</b>";
        echo "<br><a href='../index.php'>返回主界面</a>";
    }
    else{
        echo "<b style='color:red;'>学生添加出错</b>";

        echo "<br><a href='../stu_add.php'>重新添加</a>";
    }
    ?>
</div>
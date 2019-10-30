<link rel="stylesheet" href="../A_public/css/public.css" type="text/css">
<link rel="stylesheet" href="../A_public/js/bootstrap-multiselect-master/docs/css/bootstrap-3.3.2.min.css" type="text/css">
<link rel="stylesheet" href="../A_public/js/bootstrap-multiselect-master/docs/css/bootstrap-example.min.css" type="text/css">
<link rel="stylesheet" href="../A_public/js/bootstrap-multiselect-master/docs/css/prettify.min.css" type="text/css">
<link rel="stylesheet" href="../A_public/js/bootstrap-multiselect-master/dist/css/bootstrap-multiselect.css" type="text/css">

<div class="modal-content">
    <?php
    include_once("../A_public/code/conn/conn.php");
    $str = "select * from xsmd$ where 考生号 like '%".$_POST['bookname']."%'";
    //echo $str;
    $data = mysqli_query($conn,$str);


    /*echo "编号"."\t\t"."书名"."\t\t"."价格"."\t\t"."出版时间"."\t\t"."出版时间"."\t\t"."类别"."<br>";
    while($row = mysqli_fetch_array($data)){
        echo $row[0]."\t".$row[1]."\t".$row[2]."\t".$row[3]."\t".$row[4]."<br>";
    }
    */

    if(mysqli_num_rows($data) < 1){
        echo "<h3 >不包含学号为：《{$_POST['bookname']}》的学生</h3><br><a href='search.php'>重新查询</a>";
    }
    else{
        echo '<div >
					<h3>查询学生的结果为：</h3>
					 <table class="table-bordered" width="100%">
						  <tr>
							<td >学号</td>
							<td >姓名</td>
							<td >性别</td>
							<td >专业</td>
							<td >班级代号</td>
							<td >总成绩</td>
						 </tr>';
        while($rows = mysqli_fetch_array($data)) {
            echo "
					<tr>
                        <td >{$rows[0]}</td>
                        <td >{$rows[1]}</td>
                        <td >{$rows[2]}</td>
                        <td >{$rows[3]}</td>
                        <td >{$rows[4]}</td>
                        <td >{$rows[5]}</td>
                    </tr>
            		";
        }
        echo "</table><br><a href='../stu_sp_sea.php'>重新查询</a>";
    }
    ?>

</div>
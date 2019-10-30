<link rel="stylesheet" href="../A_public/css/public.css" type="text/css">
<link rel="stylesheet" href="../A_public/js/bootstrap-multiselect-master/docs/css/bootstrap-3.3.2.min.css" type="text/css">
<link rel="stylesheet" href="../A_public/js/bootstrap-multiselect-master/docs/css/bootstrap-example.min.css" type="text/css">
<link rel="stylesheet" href="../A_public/js/bootstrap-multiselect-master/docs/css/prettify.min.css" type="text/css">
<link rel="stylesheet" href="../A_public/js/bootstrap-multiselect-master/dist/css/bootstrap-multiselect.css" type="text/css">

<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2019/5/27
 * Time: 21:38
 */
//include_once("permission_flag.php");
include_once("../A_public/code/conn/conn.php");
$name=$_POST["name"];
$sex=$_POST["sex"];
$major=$_POST["major"];
$class_num=$_POST["class_num"];
$score_s=$_POST["score_s"];
$xiaoyu_v=$_POST["xiaoyu_v"];
$dayu_v=$_POST["dayu_v"];
$bt_dayu_v=$_POST["bt_dayu_v"];
$bt_xiaoyu_v=$_POST["bt_xiaoyu_v"];
$dengyu_v=$_POST["dengyu_v"];
$o_list=$_POST["o_list"];
$order=$_POST["order"];
$c_id=$_POST["c_id"];
$c_name=$_POST["c_name"];
$c_sex=$_POST["c_sex"];
$c_major=$_POST["c_major"];
$c_class=$_POST["c_class"];
$c_score=$_POST["c_score"];
$c=array($c_id,$c_name,$c_sex,$c_major,$c_class,$c_score);
$data=array_filter($c);
if (!$data){
    $ziduan="*";
}else {
    $ziduan = implode(",", $data);
}
//echo $ziduan;
$lower=0;
$uper=600;
$equ=0;
if($score_s=="xiaoyu"){
    $uper=$xiaoyu_v|600;
}elseif ($score_s=="dayu"){
    $lower=$dayu_v|0;
} elseif ($score_s=="jieyu"){
    $lower=$bt_dayu_v|0;
    $uper=$bt_xiaoyu_v|600;
} elseif ($score_s=="dengyu"){
    $lower=$dengyu_v|0;
    $uper=$dengyu_v|600;
}elseif (!$score_s){
    $lower=0;
    $uper=600;
}

$sql_s_select="SELECT ".$ziduan." FROM xsmd$ WHERE  姓名 LIKE '%".$name."%' AND 性别 LIKE '%".$sex."%' AND 专业 LIKE '%".$major."%' AND 班级代号 LIKE '%".$class_num."%' AND 总成绩 between '".$lower."' and '".$uper."' ORDER BY ".$o_list." ".$order."
";
//echo $score_s;
//echo $sql_s_select;
$result = mysqli_query($conn,$sql_s_select);
?>
    <table class="table-bordered" width="100%">

        <?php
        $ziduan_array=explode(",",$ziduan);
        echo "<tr>";
        for ($i = 0; $i < count($ziduan_array); $i++) {
            echo "<td >" . $ziduan_array[$i] . "</td>";
        }
        echo "</tr>";
        //print_r($ziduan_array);

        while ($rows = mysqli_fetch_row($result)) {
            echo "<tr>";
            for ($i = 0; $i < count($rows); $i++) {
                echo "<td >" . $rows[$i] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
<?php
echo "<a href='../stu_ht_sea.php'>重新查询</a>";
?>
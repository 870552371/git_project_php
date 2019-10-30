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

include_once("../A_public/code/conn/conn.php");

$count[]=$_POST["count_s"];
//echo "计数组：";
//print_r($count);
if ($count[0]){
    $str_count=implode(",",$count[0]);
}else{
    $str_count="";
}
//echo "<br>";
//echo $str_count;
//echo "<br>";

$c_num[]=$_POST["c_num"];
//echo "计值组：";
//print_r($c_num);
if ($c_num[0]){
    $str_num=implode(",",$c_num[0]);
}else{
    $str_num="";
}
//echo "<br>";
//echo $str_num;
//echo "<br>";

$qualification_major[]=$_POST["qualification_major"];
//echo "字段条件组：";
//print_r($qualification_major);
if ($qualification_major[0]){
    $str_qualification_major=implode(" or ",$qualification_major[0]);
}else{
    $str_qualification_major="";
}
//echo "<br>";
//echo $str_qualification_major;
//echo "<br>";

$qualification_sex[]=$_POST["qualification_sex"];
//echo "字段条件组：";
//print_r($qualification_sex);
if ($qualification_sex[0]){
    $str_qualification_sex=implode(" or ",$qualification_sex[0]);
}else{
    $str_qualification_sex="";
}
//echo "<br>";
//echo $str_qualification_sex;
//echo "<br>";

$score_s[]=$_POST["score_s"];
//echo "数值条件组：";
//print_r($score_s);
if ($score_s[0]){
    $str_score_s=implode(",",$score_s[0]);
}else{
    $str_score_s="";
}
//echo "<br>";
//echo $str_score_s;
//echo "<br>";

$group_s[]=$_POST["group_s"];
//echo "分组显示字段组：";
//print_r($group_s);
if ($group_s[0]){
    $str_group_s=implode(",",$group_s[0]);
}else{
    $str_group_s="";
}
//echo "<br>";
//echo $str_group_s;
//echo "<br>";

$order_by_s[]=$_POST["order_by_s"];
//echo "排序组：";
//print_r($order_by_s);
if ($order_by_s[0]){
    $str_order_by_s=implode(",",$order_by_s[0]);
}else{
    $str_order_by_s="";
}
//echo "<br>";
//echo $str_order_by_s;
//echo "<br>";

$order=$_POST["order"];
//echo "排序：";
//echo $order;
//echo "<br>";

$select_show[]=$_POST["select_show"];
//echo "显示字段组：";
//print_r($select_show);
if ($select_show[0]){
    $str_select_show=implode(",",$select_show[0]);
}else{
    $str_select_show="";
}
//echo "<br>";
//echo $str_select_show;
//echo "<br>";

$xiaoyu_v=$_POST["xiaoyu_v"];
$dayu_v=$_POST["dayu_v"];
$bt_dayu_v=$_POST["bt_dayu_v"];
$bt_xiaoyu_v=$_POST["bt_xiaoyu_v"];
$dengyu_v=$_POST["dengyu_v"];

if($score_s[0][0]=="xiaoyu"){
    $uper=$xiaoyu_v | '600';
    $lower=$dayu_v|'0';
}elseif ($score_s[0][0]=="dayu"){
    $uper=$xiaoyu_v | '600';
    $lower=$dayu_v | '0';
} elseif ($score_s[0][0]=="jieyu"){
    $lower=$bt_dayu_v | '0';
    $uper=$bt_xiaoyu_v | '600';
} elseif ($score_s[0][0]=="dengyu"){
    $lower=$dengyu_v | '0';
    $uper=$dengyu_v | '600';
}

if($str_count){
    $select=$str_count.",".$str_select_show;
}elseif ($str_num){
    $select=$str_num.",".$str_select_show;
}else{
    $select=$str_select_show;
}


$sql_group_select="select ".$select." from xsmd$ where (".$str_qualification_major.") and (".$str_qualification_sex.") and ("."总成绩 
    between ". $lower . " and " .$uper.") group by ".$str_group_s." order by ".$str_order_by_s." ".$order;

//echo "统计语句：";
//echo $sql_group_select;
//echo "<br>";



$select_array=explode(",",$select);
//print_r($select_array);

//echo "<br>";
//echo "查询语句：";
//echo $sql_s_select;
$result = mysqli_query($conn, $sql_group_select);
?>
    <table class="table-bordered" width="100%">

        <?php
        //        $ziduan_array=explode(",",$str_select_show);

        echo "<tr>";
        for ($i = 0; $i < count($select_array); $i++) {
            echo "<td >" . $select_array[$i] . "</td>";
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
echo "<a href='../stu_gp_sea.php'>重新统计</a>";
?>
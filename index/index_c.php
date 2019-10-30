<div class="modal-content">
<table class="table-bordered" width="100%">
    <tr>
        <h3>详细信息</h3>
    </tr>
    <tr>
        <td>
            <?php
            include_once("A_public/code/conn/conn.php");//包含数据库连接文件
            ?>
            <table class="table-bordered" width="100%">
                <tr>
                    <td >考号</td>
                    <td >姓名</td>
                    <td >性别</td>
                    <td >专业</td>
                    <td >班级代号</td>
                    <td >总成绩</td>
                    <?php
                    if($_SESSION['flag']==1){
                        echo '<td >操作</td>';
                    }
                    ?>
                </tr>
                <?php
                $pagesize = 8 ;									//每页显示记录数
                $sqlstr = "select * from xsmd$ order by 考生号";//定义查询语句
                $total = mysqli_query($conn,$sqlstr);//执行查询语句
                $totalNum = mysqli_num_rows($total);					//总记录数
                $pagecount = ceil($totalNum/$pagesize);						//总页数
                (!isset($_GET['page']))?($page = 1):$page = $_GET['page'];				//当前显示页数
                ($page <= $pagecount)?$page:($page = $pagecount);//当前页大于总页数时把当前页定义为总页数
                $f_pageNum = $pagesize * ($page - 1);								//当前页的第一条记录
                $sqlstr1 = $sqlstr." limit ".$f_pageNum.",".$pagesize;//定义SQL语句，通过limit关键字控制查询范围和数量
                $result = mysqli_query($conn,$sqlstr1);								//执行查询语句
                //while ($rows = mysqli_fetch_array($result)){									//循环输出查询结果
                ?>

                <?php
                while ($rows = mysqli_fetch_row($result)){
                    echo "<tr>";
                    for($i = 0; $i < count($rows); $i++){
                        echo "<td>".$rows[$i]."</td>";
                    }
                    if ($_SESSION['flag']==1) {
                        echo "<td><a href=stu_chg.php?action=update&id=" . $rows[0] . ">修改</a>/<a href=stu_del.php?action=del&id=" . $rows[0] . " onclick = 'return del();'>删除</a></td>";
                    }
                    echo "</tr>";
                }
                ?>


                <tr>
                    <td>&nbsp;&nbsp;
                        <?php
                        echo "共".$totalNum."个学生&nbsp;&nbsp;";
                        echo "第".$page."页/共".$pagecount."页&nbsp;&nbsp;";
                        if($page!=1){//如果当前页不是1则输出有链接的首页和上一页
                            echo "<a href='?page=1'>首页</a>&nbsp;";
                            echo "<a href='?page=".($page-1)."'>上一页</a>&nbsp;&nbsp;";
                        }else{//否则输出没有链接的首页和上一页
                            echo "首页&nbsp;上一页&nbsp;&nbsp;";
                        }
                        if($page!=$pagecount){//如果当前页不是最后一页则输出有链接的下一页和尾页
                            echo "<a href='?page=".($page+1)."'>下一页</a>&nbsp;";
                            echo "<a href='?page=".$pagecount."'>尾页</a>&nbsp;&nbsp;";
                        }else{//否则输出没有链接的下一页和尾页
                            echo "下一页&nbsp;尾页&nbsp;&nbsp;";
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</div>
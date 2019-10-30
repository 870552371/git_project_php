<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
<!--<style>-->
<!--    input[type=text]{-->
<!--        width: 255px;-->
<!--    }-->
<!--</style>-->
<div class="modal-content" >
<form action="stu_ht_sea/stu_ht_sea_ok.php" method="post" id="questionForm" target="_self">
    <table class="table-bordered" width="100%">
        <tr><h3>高级查询</h3></tr>
        <tr >
            <td >姓名</td>
            <td><input type="text" name="name" class="input-sm"></td>
        </tr>
        <tr >
            <td >性别</td>
            <td>男<input type="radio" name="sex" value="男" >|女<input type="radio" name="sex" value="女"> </td>
        </tr>
        <tr >
            <td >专业</td>
            <td><input list="major_s" name="major" class="input-sm"><datalist id="major_s">
                    <option>环境</option>
                    <option>土木</option>
                    <option>动画</option>
                </datalist>
            </td>

        </tr>
        <tr >
            <td >班级代号</td>
            <td><input type="text" name="class_num" class="input-sm"></td>
        </tr>
        <tr >
            <td >总成绩</td>
            <td><select name="score_s" id="score" class="multiselect" >
                    <option value="xiaoyu">小于</option>
                    <option value="dayu">大于</option>
                    <option value="jieyu">介于</option>
                    <option value="dengyu">等于</option>
                </select>
                <div>
                    <div id="xiaoyu" class="none">
                        <input  class="input-sm" type="text" name="xiaoyu_v" placeholder="小于" autocomplete="off"/><br>
                    </div>
                    <div id="dayu" class="none" style="display: none">
                        <input class="input-sm" type="text" name="dayu_v" placeholder="大于" autocomplete="off"/><br>
                    </div>
                    <div id="jieyu" class="none" style="display: none">
                        <input class="input-sm" type="text" name="bt_dayu_v" placeholder="大于" autocomplete="off"/><br>
                        <input class="input-sm" type="text" name="bt_xiaoyu_v" placeholder="小于" autocomplete="off"/>
                    </div>
                    <div id="dengyu" class="none" style="display: none">
                        <input class="input-sm" type="text" name="dengyu_v" placeholder="等于" autocomplete="off"/><br>
                    </div>
                </div>
            </td>
        </tr>
        <tr >
            <td >排序</td>
            <td> <select name="o_list" id="o_list">
                    <option value="总成绩">按分数</option>
                    <option value="班级代号">按班级号</option>
                    <option value="考生号">按考生号</option>
                </select>
                <select name="order" id="order">
                    <option value="ASC">升序</option>
                    <option value="DESC">降序</option>
                </select>
            </td>
        </tr>
        <tr >
            <td >要显示的字段</td>
            <td>考生号：<input type="checkbox" name="c_id" value="考生号" checked="checked">|
                姓名：<input type="checkbox" name="c_name" value="姓名" checked="checked">|
                性别：<input type="checkbox" name="c_sex" value="性别" checked="checked"><br>
                专业：<input type="checkbox" name="c_major" value="专业" checked="checked">|
                班级代号：<input type="checkbox" name="c_class" value="班级代号" checked="checked">|
                分数：<input type="checkbox" name="c_score" value="总成绩" checked="checked">
            </td>
        </tr>
    </table>
    <input type="submit" id="test1" value="查询" class="btn center-block" >
</form>
</div>
<!--<button id="test2" style="margin: 0 auto; width: 100px;height: 50px;display: block">测试</button>-->
<script>
    $("#test2").click(function(){
        console.log($("#questionForm").serialize());
    });
    $("#test1").click(function(){
        $("from")[0].reset();
    });
    $("#score").change(function(){
        var testval=$("#score").val();
        $("#"+testval).show().siblings().hide();
//        $("#"+testval).find("input").removeAttr("disabled");
//        $("#"+testval).siblings().find("input").attr("disabled",true)
    });
    $('#score').multiselect();
    $('#o_list').multiselect();
    $('#order').multiselect();
</script>
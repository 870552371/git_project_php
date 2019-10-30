<div class="modal-content">
<form action="stu_gp_sea/stu_gp_sea_ok.php" method="post" id="questionForm" target="_self">
    <table class="table-bordered" width="100%">
        <tr>
            <h3>分组统计</h3>
        </tr>


        <tr>
            <td ><p>指定计数字段</p></td>

            <td>
                <select multiple="multiple" id="count_s" name="count_s[]" >
                    <option value="count(考生号) AS 人数">人数</option>
                    <option value="count(专业) AS 专业数">专业数</option>
                </select>
            </td>

        </tr>


        <tr>
            <td><p>指定数值</p></td>

            <td>

                <select name="c_num[]" id="c_num" multiple="multiple" >
                    <optgroup label="MAX" id="MAX">
                        <option value="MAX(总成绩)" selected="selected">MAX[分数]</option>
                    </optgroup>
                    <optgroup label="MIN" id="MIN">
                        <option value="MIN(总成绩)" selected="selected">MIN[分数]</option>
                    </optgroup>
                    <optgroup label="AVG" id="AVG">
                        <option value="AVG(总成绩)" selected="selected">AVG[分数]</option>
                    </optgroup>
                </select>
            </td>

        </tr>


        <tr>
            <td><p>指定条件</p></td>
            <td>
                <select multiple="multiple" id="qualification_major" name="qualification_major[]" required>
                    <optgroup label="专业" >
                        <option value="专业='动画'" selected="selected">动画</option>
                        <option value="专业='土木工程（建筑工程）'" selected="selected">土木工程（建筑工程）</option>
                        <option value="专业='机械设计制造及其自动化'" selected="selected">机械设计制造及其自动化</option>
                        <option value="专业='环境设计'" selected="selected">环境设计</option>
                        <option value="专业='计算机科学与技术'" selected="selected">计算机科学与技术</option>
                </select>
                <select multiple="multiple" id="qualification_sex" name="qualification_sex[]" required>
                    <optgroup label="性别">
                        <option value="性别='男'" selected="selected">男</option>
                        <option value="性别='女'" selected="selected">女</option>
                    </optgroup>
                </select>

                <hr>
                <select name="score_s[]" id="qualification_num" >
                    <optgroup label="总分">
                        <option  value="xiaoyu" selected="selected">总分|小于</option>
                        <option  value="dayu">总分|大于</option>
                        <option  value="jieyu">总分|介于</option>
                        <option  value="dengyu">总分|等于</option>
                    </optgroup>
                </select>

                <div id="s_input" >
                    <div id="xiaoyu" class="none" style="display: block;">
                        <input class="input-sm" type="text" name="xiaoyu_v" placeholder="小于:600"/><br>
                    </div>
                    <div id="dayu" class="none" style="display: none">
                        <input class="input-sm" type="text" name="dayu_v" placeholder="大于:0"/><br>
                    </div>
                    <div id="jieyu" class="none" style="display: none">
                        <input class="input-sm" type="text" name="bt_dayu_v" placeholder="大于:0"/><br>
                        <input class="input-sm" type="text" name="bt_xiaoyu_v" placeholder="小于:600"/>
                    </div>
                    <div id="dengyu" class="none" style="display: none">
                        <input class="input-sm" type="text" name="dengyu_v" placeholder="0~600"/><br>
                    </div>
                </div>
            </td>

        </tr>


        <tr >
            <td ><p>指定分组</p></td>

            <td>
                <select name="group_s[]" id="group_s" multiple="multiple" required>
                    <option value="考生号" >考生</option>
                    <option value="性别" >性别</option>
                    <option value="专业" selected="selected">专业</option>
                </select>
            </td>

        </tr>


        <tr >
            <td ><p>指定排序</p></td>

            <td>
                <select name="order_by_s[]" id="order_by_s" multiple="multiple" required>
                    <option value="总成绩">按成绩</option>
                    <option value="班级代号">按专业</option>
                    <option value="考生号" selected="selected">按考号</option>
                </select>
                <select name="order" id="order">
                    <option value="ASC" selected="selected">升序</option>
                    <option value="DESC">降序</option>
                </select>
            </td>

        </tr>


        <tr >
            <td ><p>指定显示字段</p></td>
            <td>
                <select name="select_show[]" id="select_show" multiple="multiple" required>
                    <option value="考生号" selected="selected">考生号</option>
                    <option value="姓名" selected="selected">姓名</option>
                    <option value="性别" selected="selected">性别</option>
                    <option value="专业" selected="selected">专业</option>
                    <option value="班级代号" selected="selected">班级代号</option>
                    <option value="总成绩" selected="selected">分数</option>
                </select>
            </td>
        </tr>
    </table>
    <input type="submit" id="test1" value="统计" class="center-block btn" >
</form>
</div>
<!--<button id="test2" style="margin: 0 auto; width: 100px;height: 50px;display: block">测试</button>-->

<script src="stu_gp_sea/stu_gp_sea.js"></script>
<script>
    $(document).ready(function() {
        $("#test2").click(function () {
            console.log($("#questionForm").serialize());
        });
        $("#qualification_num").change(function () {
            var testval = $("#qualification_num").val();
            console.log(testval);
            if (testval=="xiao"||"dayu"||"jieyu"||"dengyu") {
                $("#s_input").show();
                $("#" + testval).show().siblings().hide();
            }
//        $("#"+testval).find("input").removeAttr("disabled");
//        $("#"+testval).siblings().find("input").attr("disabled",true)
        });
    });

</script>
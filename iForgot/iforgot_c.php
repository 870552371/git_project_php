<div class="modal-content" style="margin-top: 150px">
    <form action="iForgot/iforgot_ok.php" method="post">
        <table width="100%" class="table-bordered">
            <tr>
                <td>
                    <h3 class="h2 text-left">找回密码</h3>
                </td>
            </tr>
            <tr><td>账<span style="padding:0 6px;"></span>户<span style="padding:0 5px;"></span>名：<input class="input-sm" type="text" name="username" autocomplete="off"/></td></tr>
            <tr><td>手<span style="padding:0 6px;"></span>机<span style="padding:0 5px;"></span>号：<input class="input-sm" type="text" name="tel" autocomplete="off"/></td></tr>
                    <!--            <li><label>选择问题：<select name="question">-->
                    <!--                        <option  value="你的生日是？">你的生日是？(8位数简写)</option>-->
                    <!--                        <option  value="高中就读的学校是？">高中就读的学校是？</option>-->
                    <!--                                </select></label>-->
                    <!--            </li>-->
            <tr><td>输入答案：<input class="input-sm" type="text" name="answer" autocomplete="off"/></label></td></tr>
            <tr><td>新<span style="padding:0 6px;"></span>密<span style="padding:0 5px;"></span>码：<input class="input-sm" type="password" name="password_c" autocomplete="off"/></td></tr>
            <tr>
                <td><input type="submit" value="提交"  class="btn" />
                    <input type="reset" value="重置"  class="btn" />
                </td>
            </tr>
        </table>
    </form>
    <a href="login.php">返回</a>
</div>
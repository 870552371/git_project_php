<div class="modal-content" style="margin-top: 55px">
    <form action="add_user/add_user_ok.php" method="post">
        <table class="table">
            <tr>
                <td><h3 class="h2 text-left">用户注册</h3></td>
            </tr>
            <tr><td><label>账<span style="padding:0 4px;"></span>户<span style="padding:0 4px;"></span>名：<input class="input-sm" type="text" name="username" autocomplete="off"/></label></td></tr>
            <tr><td><label>密<span style="padding:0 16px;"></span>码：<input class="input-sm" type="password" name="password" autocomplete="off"/></label></td></tr>
            <tr><td><label>再次确认：<input class="input-sm" type="password" name="password_s" autocomplete="off"/></label></td></tr>
            <tr><td><label>手<span style="padding:0 4px;"></span>机<span style="padding:0 4px;"></span>号：<input class="input-sm" type="text" name="tel" autocomplete="off"/></label></td></tr>
            <tr><td><label>选择问题：
                    <select name="question" id="question">
                        <option  value="你的生日是？">你的生日是？(8位数简写)</option>
                        <option  value="高中就读的学校是？">高中就读的学校是？</option>
                    </select>
                    </label></td>
            </tr>
            <tr><td><label>输入答案：<input class="input-sm" type="text" name="answer" autocomplete="off"/></label></td></tr>
            <tr><td><label>昵<span style="padding:0 16px;"></span>称：<input class="input-sm" type="text" name="total" autocomplete="off"/></label></td></tr>
            <tr><td><input type="submit" class="btn" value="注册"  />
                    <input type="reset" class="btn" value="重置" /></td></tr>
        </table>
    </form>
    <a href="login.php">返回</a>
</div>
<script src="add_user/add_user.js"></script>
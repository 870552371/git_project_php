<div class="modal-content">
    <form action="change_pwd/chang_pwd_ok.php" method="post">
        <table class="table-bordered" width="100%">
            <tr>
               <h3>修改密码</h3>
            </tr>
            <tr>
                <td>旧<span style="padding:0 4px;"></span>密<span style="padding:0 4px;"></span>码：</td>
                <td><input class="input-sm" type="password" name="password" autocomplete="off"/></td>
            </tr>
            <tr>
                <td>新<span style="padding:0 4px;"></span>密<span style="padding:0 4px;"></span>码：</td>
                <td><input class="input-sm" type="password" name="password_c" autocomplete="off"/></td>
            </tr>
            <tr>
                <td>再次确认：</td>
                <td><input class="input-sm" type="password" name="password_s" autocomplete="off"/></td>
            </tr>
            <tr>
                <td>手<span style="padding:0 4px;"></span>机<span style="padding:0 4px;"></span>号：</td>
                <td><input class="input-sm" type="text" name="tel" autocomplete="off"/></td>
            </tr>
        </table>
        <div class="text-center">
            <input type="submit" value="提交"  class="btn" />
            <input type="reset" value="重置"  class="btn"/></div>

    </form>
</div>
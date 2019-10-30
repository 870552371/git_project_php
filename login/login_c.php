<link rel="stylesheet" href="login/login.css">
<div id="login_frame" class="modal-content"">

<p id="image_logo"></p>

<form method="post" action="login/login_ok.php">

    <p id="image_logo"><img width="50px" height="50px"  src="A_public/icon/whsw.png"></p>

    <p><label class="label_input">用户名</label><input type="text" name="username" id="username" class="text_field"/></p>
    <p><label class="label_input">密码</label><input type="password" name="password" id="password" class="text_field"/></p>

    <div id="login_control">
        <input type="submit" id="btn_login" value="登录" onclick="login();"/>
        <a  href="add_user.php" >用户注册</a>&nbsp;|&nbsp;<a  href="iForgot.php" >忘记密码</a>
    </div>
</form>
</div>


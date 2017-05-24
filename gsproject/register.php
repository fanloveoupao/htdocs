<?php
define("IN_TG", true);
?>
<!DOCTYPE html>
<html lang="en">
<?php
require_once "include/title.inc.php"
?>
<head>
    <meta charset="UTF-8">
    <title>注册</title>
</head>
<body>
<?php
require_once "include/header.php"
?>
<div id="register">
    <h2>会员注册</h2>
    <form method="post" name="register" action="register.php?action=register">
        <input type="hidden" name="uniqid" value="e987a9fec59214b9bdf5d0d5bba95603342f76e9">
        <dl>
            <dt>请认真填写一下内容</dt>
            <dd>用 户 名：<input type="text" name="username" class="text"> (*必填，至少两位)</dd>
            <dd>密　　码：<input type="password" name="password" class="text"> (*必填，至少六位)</dd>
            <dd>确认密码：<input type="password" name="notpassword" class="text"> (*必填，同上)</dd>
            <dd>密码提示：<input type="text" name="question" class="text"> (*必填，至少两位)</dd>
            <dd>密码回答：<input type="text" name="answer" class="text"> (*必填，至少两位)</dd>
            <dd>性　　别：<input type="radio" name="sex" value="男" checked="checked">男 <input type="radio" name="sex"
                                                                                         value="女">女
            </dd>
            <dd class="face"><input type="hidden" name="face" value="face/m01.gif">
                <img src="face/m01.gif" alt="头像选择" id="faceimg"
                     onclick="javascript:window.open('face.php','face','width=400,height=400,top=0,left=0')"></dd>
            <dd>电子邮件：<input type="text" name="email" class="text"> (*必填，激活账户)</dd>
            <dd>　Q Q 　：<input type="text" name="qq" class="text"></dd>
            <dd>主页地址：<input type="text" name="url" class="text" value="http://"></dd>
            <dd>验 证 码：<input type="text" name="code" class="text yzm"> <img src="code.php" id="code"
                                                                            onclick="javascript:this.src='code.php?tm='+Math.random();">
            </dd>
            <dd><input type="submit" class="submit" value="注册"></dd>
        </dl>
    </form>
</div>
<?php
require_once "include/foot.php"
?>
</body>
</html>
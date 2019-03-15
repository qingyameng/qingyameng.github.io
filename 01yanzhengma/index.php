<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>确认验证码</title>
    </head>
    <body>

        <?php

        if(isset($_REQUEST['authcode'])){
            session_start();
            if(strtolower($_REQUEST['authcode'])==$_SESSION['authcode']){
                echo '<font color="#0000CC">输入正确</font>';
            }else{
                echo '<font color="#CC0000"><b>输入错误</b></font>';
            }
            exit();
        }
        ?>

        <form method="post" action="./index.php">
            <p>
                验证码：<img id="captcha_img" border="1" src="./captcha.php?r=<?php echo rand();?>" width="100" height="30">
                <a href="javascript:void(0)" onclick="document.getElementById('captcha_img').src='./captcha.php?r='+Math.random()">换一个？</a>
            </p>
            <p>请输入图片中的内容：<input type="text" name="authcode" value=""></p>
            <p><input type="submit" value="提交" style="padding:6px 20px;"></p>
        </form>
    </body>
</html>
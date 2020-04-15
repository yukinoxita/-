<html>
<title>server['php_self']</title>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
</form>
<p><b>背景:当有人偷懒提交表单写成这样的时候<br>
action=$_SERVER['PHP_SELF'];<br>
可能存在XSS漏洞<br>
xss payload = <?php echo htmlspecialchars('\"</form><script>alert(/xss/)</script>'); ?><br>
直接加在url后面即可
alert('document.cookie')还能获取cookie呢
</b></p>
</body>
</html>

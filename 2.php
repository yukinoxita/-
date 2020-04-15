<html>
<head>
<title>普通的反射型xss</title>
<style>
p{font-size:30px;}
div
{
    border:1px solid grey;
    margin-top:200px;
    margin-left:500px;    
    margin-right:500px;    
    text-align:center;
}
#payload{font-size:20px;}
</style>
</head>
<body>
<div>
<form action="#" method="get">
<input name="text" type="text" placeholder="随你输入">
<input type="submit" value="submit">
<p id="payload">payload : <?php echo htmlspecialchars("<script>alert(/xss/)</script>"); ?></p>
</form>
<?php
$str = $_GET['text'];
echo "<p>你的输入 : ".$str."</p>";
?>
</div>
</body>
</html>

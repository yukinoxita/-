<?php
include '../sql_connect.php';
$conn->query("SET NAME UTF8");
$conn->select_db("loudong");
$sql = "select name,passwd from csrf";

$result = $conn->query($sql);
$row    = $result->fetch_assoc();
$name   = $row['name'];
$passwd = $row['passwd'];
$cookie = $_COOKIE['user'];
echo $cookie;
?>
<html>
<head>
<title>get型csrf</title>
<style>
div
{
    border:1px solid grey;
    margin-top:100px;
    margin-left:500px;    
    margin-right:500px;    
    text-align:center;
}
a
{
    font-size:40px;
    color:black;
}
#tips
{
    font-size:30px;    
    color:red;
}
</style>
</head>
<body>
<div>
<h2>改密码吧</h2>
<form action="check_get.php" method="get">
<input name="name" type="text" placeholder="name">
<input name="passwd" type="text" placeholder="passwd">
<input type="submit" value="submit">                                                                    
</form>
<h2>当前信息</h2>
<p><?php echo "name = ".$name;?></p>
<p><?php echo "pass = ".$passwd?></p>
</div>
<p id='tips'>以下两个是诱导链接,点了就GG</p>
<a href='check_get.php?name=hacker&passwd=hacker'><img src='../cxk.png' width=150px></a><br>
<a href='check_get.php?name=hacker&passwd=hacker'>性感荷官在线发牌</a>

</body>
</html>

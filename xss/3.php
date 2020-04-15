<?php
$ServerName = 'localhost';
$UserName   = 'root';
$Password   = '123456';
include "../sql_connect.php";
$conn->select_db('luodong');
$conn->query("SET NAMES UTF8");
$str = $_GET['strings'];
if($str == '')
    echo "尚未提交评论";
else if($str == '0')
{
    $conn->query('delete from massage');
    echo "<script>alert('删除成功')</script>";
}
else
{
    $sql = "insert into massage value('$str')";   
    if($conn->query($sql) === TRUE)
    {
        echo "ok";
    }
    else
    {
        echo $sql."<br>".$conn->error;
    }
}
?>
<html>
<head>
<title>普通的储存型xss</title>
<style>
#feedback
{
    //text-align:center;
    border:1px solid grey;
    margin-right:1000px;
}
form
{
    font-size:30px;    
}
</style>
</head>
<body>
<form id="submit" action="3.php" mothod="get">
<input name="strings" type="text" placeholder="输入0即可删除所有评论">
<input type="submit" value="提交">
</form>
</script>
<div id="feedback">
<?php
$sql = 'select text from massage';
$result = $conn->query($sql);
if($result->num_rows != 0)
{
    while($row = $result->fetch_assoc())
    {
        echo "评论：<br>".$row['text']."<br>";    
        echo "---------------------------------------------------------------------------<br>";
    }
}
?>
</div>
</body>
</html>

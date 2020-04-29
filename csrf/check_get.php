<?php
include '../sql_connect.php';
$name = $_GET['name'];
$pass = $_GET['passwd'];
$conn->select_db('loudong');
$sql = "update csrf set name='$name'";
$conn->query($sql);
$sql = "update csrf set passwd='$pass'";
$conn->query($sql);
echo "<script>alert('修改完毕')</script>";
echo "<script>window.location.href='1.php'</script>";
?>

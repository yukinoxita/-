<?php?>
<html>
<head>
<title>某些漏洞的练习场</title>
<style>
h1
{
    text-align:center;
}
#xss
{
    border:1px solid grey;
    text-align:center;
    //margin-left:500px;
    margin-right:1000px;
}
a
{
    color:red;    
    font-size:25px;
}
#xssul
{
    text-align:left;
}
#title
{
    margin-bottom:0px;    
    margin-top:0px;    
}
</style>
</head>
<body>
<p>说明</p>
<p>本人在学习过程中发现的一些web的漏洞，故总结于此</p>
<div id="all">
<div id="xss">
<a href=xss/index.php><h1 id="title">xss</h1></a>
<ul id=xssul>
<li><a href="xss/2.php">普通的反射型xss</a></li>
<li><a href="xss/3.php">普通的储存型xss</a></li>
<!--li><a></a></li-->
<li><a href="xss/1.php">$_SERVER['PHP_SELF']可能引发的漏洞</a></li>
</ul>
</div>
</div>
</body>
</html>

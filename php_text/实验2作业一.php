<!DOCTYPE html>
<html>
<head>
    <title>外部变量演示</title>
</head>
<body>
<!--产生POST外部变量的html5表单form 1-->
<form action="" method="post">
    学号：<input type="text" name="XH"><br/>
    姓名：<input type="text" name="XM"><br/>
    <input type="submit" name="postmethod" value="POST方法提交"> 
</form>
<!--产生GET外部变量的html5表单form 2-->
<form action="" method="get">
    性别:<input name="SEX" type="radio" value="男">男
        <input name="SEX" type="radio" value="女">女<br/>
    专业：<select name = 'ZY'>
        <option value="计算机科学与技术">计算机科学与技术</option>
        <option value="软件工程">软件工程</option>
        <option value="网络工程">网络工程</option>
        <option value="信息安全">信息安全</option>
    </select><br/>
    <input type="submit" name="getmethod" value="GET方法提交">
</form>
</body>
</html>
<?php
//使用isset()函数判断是否用get方法提交

if(isset($_POST['getmethod'])){
    $XH = $_POST['XH'];
    $XM = $_POST['XM'];
    echo '接收POST变量:<br/>';
    echo "学号：".$XH."<br/>";
    echo "姓名：".$XM."<br/>";
}
//使用isset()函数判断是否用post方法提交
if(isset($_GET['postmethod'])){
    $SEX = $_GET['SEX'];
    $ZY = $_GET['ZY'];
    echo '<br/>接收GET变量:<br/>';
    echo "性别：".$SEX."<br/>";
    echo "专业：".$ZY."<br/>";
}
    echo '<br/>接收REQUEST变量:<br/>';
    echo "学号：".@$_REQUEST['XH']."<br/>";
    echo "姓名：".@$_REQUEST['XM']."<br/>";
    echo "性别：".@$_REQUEST['SEX']."<br/>";
    echo "专业：".@$_REQUEST['ZY']."<br/>";
?>

//完成
<!DOCTYPE html>
<html>
<head>
    <title>标记应用</title>
    <style type ="text/css">
        p{
            text-align:center;
            font-family:"黑体";
            font-size:24px;
        }
    </style>
</head>


<body>
    <p>HTML5页面</p>
    <?php
        $str1 = "PHP变量1";
        $str2 = "PHP变量2";
    echo "<script>";
    echo "alert('$str1');";
    echo "</script>";
    ?>
    <input type="text" name="tx" size="20"/><br/>
    <input type="button" name="bt" value="单击" onclick="document.getElementsByName('tx')[0].value='<?php echo $str2; ?>'">
</body>
</html>
<!DOCTYPE html>
<!-- HTML5表单，包含一个下拉菜单和一个[提交]按钮 -->
<form name='form1' method='post' action=''>
    兴趣爱好<select name='hobby'>
        <option value='旅游'>旅游</option>
        <option value='美食'>美食</option>
        <option value='音乐'>音乐</option>
        <option value='电影'>电影</option>
    </select>
    <input type='submit' value='提交'>
</form>

<?php
    $XQ=@$_POST['hobby'];
    switch($XQ){
        case '旅游':
            echo "小王喜欢旅游！";
            break;
        case '美食':
            echo "小王喜欢美食！";
            break;
        case '音乐':
            echo "小王喜欢音乐！";
            break;
        case '电影':
            echo "小王喜欢电影！";
            break;
        default:
            echo "请选择你的兴趣爱好！";
    }
?>
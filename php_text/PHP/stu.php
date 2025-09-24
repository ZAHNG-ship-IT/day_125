<html>
<head>
    <title>学生信息显示</title>
</head>
<body>
<form name="form1" method="post" action="info.php">
    <table width="400" border="0" align="center" bgcolor="#CCCCCC">
        <tr>
            <td colspan="2" bgcolor="#999999"><div align="center">学生信息显示</div></td>
        </tr>
        <tr>
            <td>学号</td>
            <td><input name="student_id" type="text" value="1234043834"></td>
        </tr>
        <tr>
            <td>姓名</td>
            <td><input name="student_name" type="text" value="李馨靓"></td>
        </tr>
        <tr>
            <td>性别</td>
            <td><input name="student_gender" type="text" value="女"></td>
        </tr>
        <tr>
            <td>出生日期</td>
            <td><input name="student_birth" type="text" value="xxxx-xx-xx"></td>
        </tr>
        <tr>
            <td>专业</td>
            <td>
                <select name="KC" size="3" multiple>
                    <option>计算机科学与技术</option>
                    <option>软件工程</option>
                    <option>信息管理</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>所学课程</td>
            <td><select name="ZF" size="3" multiple>
                    <option selected>计算机导论</option>
                    <option selected>数据结构</option>
                    <option>数据库原理</option>
                    <option>操作系统</option>
                    <option>计算机网络</option>
                </select></td>
        </tr>
        <tr>
            <td>备注：</td>
            <td><textarea name="BZ" cols="30" rows="5">团员</textarea></td>
        </tr>
        <tr>
            <td>兴趣爱好</td>
            <td><input name="XQ" type="checkbox" value="听音乐">听音乐
                <input name="XQ" type="checkbox" value="看电影">看电影
                <input name="XQ" type="checkbox" value="旅游">旅游
                <input name="XQ" type="checkbox" value="运动">运动
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="BUTTON1" value="提交"></td>
            <td><input type="reset" name="BUTTON2" value="重置"></td>
        </tr>
    </table>
</form>
</body>
</html>
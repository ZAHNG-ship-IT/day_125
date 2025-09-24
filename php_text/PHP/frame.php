<html>
<head>
    <title>框架中显示网页</title>
</head>
<frameset rows="80,*">
    <frame src="top.php" name="topFrame" scrolling="no" noresize>
    <frameset cols="25%,*">
        <frame src="left.php" name="leftFrame" scrolling="auto" noresize>
        <frame src="content.php" name="mainFrame" scrolling="auto">
    </frameset>
</frameset>
</html>
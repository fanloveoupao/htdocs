<html>
<head><title>添加学生信息</title></head>
<body>
<center>
    <?php include('menu.php'); ?>
    <h3>增加学生信息</h3>
    <form action="action.php?action=add" method="post">
        <table>
            <tr>
                <td>姓名</td>
                <td><input type="text" name="name"/></td>
            </tr>
            <tr>
                <td>性别</td>
                <td><input type="radio" name="sex" value="男"/> 男
                    <input type="radio" name="sex" value="女"/> 女
                </td>
            </tr>
            <tr>
                <td>班级</td>
                <td><input type="text" name="class_id"/></td>
            </tr>
            <tr>
                <td>年龄</td>
                <td><input type="text" name="age"/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="add" value="添加"/>
                    <input type="reset" name="reset" value="重置"/>
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
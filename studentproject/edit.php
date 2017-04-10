<html>
<head><title>修改学生信息</title></head>
<body>
<center>
    <?php include('menu.php');
    require_once 'action.php';
    $id = $_GET['id'];
    Action::connect();
    $row = Action::querryByid($id);
    ?>
    <h3>修改学生信息</h3>
    <form action="action.php?action=update" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <table>
            <tr>
                <td>姓名</td>
                <td><input type="text" name="name" value="<?php echo $row['name'] ?>"></td>
            </tr>
            <tr>
                <td>性别</td>
                <td><input type="radio" name="sex" value="男" <?php echo ($row['sex'] == '男') ? "checked" : "" ?>/> 男
                    <input type="radio" name="sex" value="女" <?php echo ($row['sex'] == '女') ? "checked" : "" ?> /> 女
                </td>
            </tr>
            <tr>
                <td>班级</td>
                <td><input type="text" name="class_id" value="<?php echo $row['class_id'] ?>"/></td>
            </tr>
            <tr>
                <td>年龄</td>
                <td><input type="text" name="age" value="<?php echo $row['age'] ?>"/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="add" value="修改"/>
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
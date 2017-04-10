<?php
require_once 'action.php'
?>
<html>
<head><title>学生管理系统</title></head>
<script>
    function doDel(id) {
        if (confirm("确定删除吗")) {
            window.location = 'action.php?action=del&id=' + id;
        }
    }
    function doUpdate(id) {
        window.location = 'edit.php?id=' + id;
    }
</script>
<body>
<center>
    <!--包含菜单-->
    <?php
    include('menu.php');
    ?>
    <h3>浏览学生信息</h3>
    <!--表头-->
    <table width="600" border="1">
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>性别</th>
            <th>班级</th>
            <th>年龄</th>
            <th>操作</th>
        </tr>
        <?
        /*连接数据库*/
        $sql_pdo = Action::connect();
        /*查询数据库并且解析遍历显示*/
        $arr = Action::querry();
        foreach ($arr as $row) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['sex']}</td>";
            echo "<td>{$row['class_id']}</td>";
            echo "<td>{$row['age']}</td>";
            echo "<td>
    <a href='javascript:doDel({$row['id']})'>删除</a>
     <a href='edit.php?id={$row['id']}'>修改</a>
</td>";
            echo "</tr>";
        }
        ?>
    </table>

</center>
</body>
</html>
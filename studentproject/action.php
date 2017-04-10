<?php

/**
 * Created by PhpStorm.
 * User: bruse
 * Date: 2017/4/9
 * Time: 下午10:14
 */

//通过action的值进行操作
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case "add":
            Action::insert($_POST['name'], $_POST['sex'], $_POST['class_id'], $_POST['age']);
            break;
        case "del":
            /*不能直接传递进去*/
            $id = $_GET['id'];
            Action::del($id);
            break;
        case 'update':
            $id = $_POST['id'];
            Action::update($id, $_POST['name'], $_POST['sex'], $_POST['class_id'], $_POST['age']);
            break;
    }
}

class Action
{
    private static $sql_pdo = null;

    public static function connect()
    {
        if (self::$sql_pdo == null) {
            try {
                self::$sql_pdo = new PDO("mysql:host=localhost;dbname=stu_db", 'root', '');
                self::$sql_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$sql_pdo->query("set names utf8");
                self::$sql_pdo->beginTransaction();
            } catch (PDOException $exception) {
                echo '<script >alert("数据库连接失败")</script>>';
                die("连接失败" . $exception->getMessage());

            }
        }
        return self::$sql_pdo;
    }

    public static function querry()
    {
        if (self::$sql_pdo == null) {
            self::connect();
        } else {
            $sql = "select * from ys_stu";
            $stm = self::$sql_pdo->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }

    }

    public static function insert($name, $sex, $class_id, $age)
    {
        try {
            $sql = "insert into ys_stu VALUE (?,?,?,?,?)";
            $stmt = self::$sql_pdo->prepare($sql);
            $arr = array(null, $class_id, $name, $sex, $age);
            $stmt->execute($arr);
            self::$sql_pdo->commit();
            echo "<script>alert('添加成功');window.location='index.php'</script>>";
        } catch (PDOException $exception) {
            $str = $exception->getMessage();
            echo '<script>alert("插入失败")</script>>';
            die("插入失败.$str");
            self::$sql_pdo->rollBack();
        }
    }

    public static function del($id)
    {
        try {
            $sql = "delete from ys_stu WHERE id={$id}";
            $stmt = self::$sql_pdo->prepare($sql);
            $stmt->execute();
            self::$sql_pdo->commit();
            echo "<script>alert('删除成功');window.location='index.php'</script>";
        } catch (PDOException $exception) {
            echo '<script>alert("删除失败")</script>';
            self::$sql_pdo->rollBack();
        }
    }

    public static function querryByid($id)
    {
        try {
            $sql = "select * from ys_stu WHERE id={$id}";
            $stmt = self::$sql_pdo->query($sql);
            //这里是进行解析这个数据
            $arr = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!empty($arr)) {
                self::$sql_pdo->commit();
                return $arr;
            } else {
                self::$sql_pdo->rollBack();
            }

        } catch (PDOException $exception) {
            self::$sql_pdo->rollBack();
        }
    }

    public static function update($id, $name, $sex, $class_id, $age)
    {
        if (self::$sql_pdo == null) {
            self::connect();
        }
        try {
            $sql = "update ys_stu set name=class_id='{$class_id}',name='{$name}',sex='{$sex}',age={$age} WHERE id={$id}";
            $stmt = self::$sql_pdo->prepare($sql);
            $stmt->execute();
            self::$sql_pdo->commit();
            header("Location:index.php");
        } catch (PDOException $exception) {
            die("更新失败" . $exception->getMessage());
            self::$sql_pdo->rollBack();
        }
    }
}


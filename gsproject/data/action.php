<?php

/**
 * Created by PhpStorm.
 * User: fan-gk
 * Date: 2017/5/23
 * Time: 下午10:04
 */
class ActionUtil
{
    private static $sql_pdo = null;

    public static function connect()
    {
        if (self::$sql_pdo == null) {
            try {
                // self::$sql_pdo = new PDO("mysql:host=118.89.28.170;dbname=gsproject", 'fgk', 'fangaokui');
                self::$sql_pdo = new PDO("mysql:host=localhost;dbname=gsproject", 'root', '');
                self::$sql_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$sql_pdo->query("set names utf8");
                self::$sql_pdo->beginTransaction();
            } catch (Exception $exception) {
                echo self::JsonUtil(null, "0x00000001", "连接数据库失败" . $exception->getMessage());
            }
        }
        return self::$sql_pdo;
    }

    public static function insertUser($phone, $account, $username, $password, $major)
    {
        if (self::$sql_pdo == null) {
            self::connect();
        }
        try {
            $sql = "insert into user VALUE (?,?,?,?,?,?)";
            $stmt = self::$sql_pdo->prepare($sql);
            $arr = array(null, $phone, $account, $username, $password, $major);
            $stmt->execute($arr);
            self::$sql_pdo->commit();
        } catch (PDOException $exception) {
            $str = $exception->getMessage();
           echo "插入失败.$str";
            self::$sql_pdo->rollBack();
        }
    }

    public static function quarryByAccount($account)
    {
        if (self::$sql_pdo == null) {
            self::connect();
        }
        try {
            $sql = "select * from user WHERE account={$account}";
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

    public static function JsonUtil($array, $state_code, $message)
    {
        $result = array("data" => $array, "state_code" => $state_code, "message" => $message);
        $json = json_encode($result, JSON_UNESCAPED_UNICODE);
        return $json;
    }
}
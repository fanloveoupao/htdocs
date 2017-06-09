<?php
/**
 * Created by PhpStorm.
 * User: fan-gk
 * Date: 2017/5/23
 * Time: 下午10:23
 */
require_once '../action.php';
ActionUtil::connect();
if (isset($_GET['phone'])
    && isset($_GET['account']) && isset($_GET['username'])
    && isset($_GET['password']) && isset($_GET['major'])
) {
    $phone = $_GET['phone'];
    $account = $_GET['account'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    $major = $_GET['major'];
    ActionUtil::insertUser($phone, $account, $username, $password, $major);
    echo ActionUtil::JsonUtil(null, "0x00000000", "注册成功");
} else {
    echo ActionUtil::JsonUtil(null, "0x00000000", "注册失败");
}

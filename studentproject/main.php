<?php
/**
 * Created by PhpStorm.
 * User: fan-gk
 * Date: 2017/5/23
 * Time: 上午10:51
 */
require_once "action.php";
Action::connect();
if (isset($_POST["ID"])) {
    $id = $_POST["ID"];
    $arr = Action::querryByid($id);
    $result = array("data" => $arr, "state_code" => "0x00000000", "message" => "请求成功");
    echo Action::JsonUtil($result);
} else {
    $arr = Action::querryByid(1);
    $result = array("data" => $arr, "state_code" => "0x00000000", "message" => "请求成功");
    echo Action::JsonUtil($result);
}

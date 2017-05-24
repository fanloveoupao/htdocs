<?php
/**
 * Created by PhpStorm.
 * User: fan-gk
 * Date: 2017/5/23
 * Time: 下午6:41
 * 登录逻辑
 */
require_once "../action.php";
ActionUtil::connect();
if (isset($_GET['account'])) {
    $account = $_GET['account'];
    $arr = ActionUtil::quarryByAccount($account);
    echo ActionUtil::JsonUtil($arr, "0x00000000", "成功");
} else {
    echo ActionUtil::JsonUtil(null, "0x00000000", "失败");
}

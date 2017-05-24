<?php
/**
 * Created by PhpStorm.
 * User: fan-gk
 * Date: 2017/5/23
 * Time: 上午11:30
 */
if (isset($_POST['name'])) {
    $account = $_POST['name'];
    Action::connect();
    $result = Action::querryByAccount($account);
    if ($result==1){
        echo "成功";
    }else{
        echo "0x01";
    }
} else {
    echo "0x01";
}
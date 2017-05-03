<?php
header("content-type:text/html;charset=utf-8");
$arr = array(
    "state_code" => "0x00000000",
    "message" => "成功",
    "data" => array("name" => "数据返回")
);
echo json_encode($arr,JSON_UNESCAPED_UNICODE);

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/4
 * Time: 23:20
 */
if($_GET["action"] == 'search'){
    header("Content-type:text/json");
    $stulist = array(
        array("Code"=>"1001","Name"=>"张三","Sex"=>"男"),
        array("Code"=>"1002","Name"=>"李四","Sex"=>"女")
    );
    echo json_encode($stulist);
}elseif($_GET["action"] == 'save'){
    if($_POST["key"] == '1010')
        echo "1";
    else
        echo "0";
}
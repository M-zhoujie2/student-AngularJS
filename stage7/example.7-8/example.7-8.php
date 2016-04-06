<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/4
 * Time: 23:20
 */
if($_GET["action"] == 'search'){
    if($_GET["id"] == '1010')
        echo "1";
    else
        echo "0";
}elseif($_GET["action"] == 'update'){
    if($_POST["key"] == '1011' && $_GET["update"] == 'true')
        echo "1";
    else
        echo "0";
}elseif($_GET["action"] == 'save'){
    if($_POST["key"] == '1012')
        echo "1";
    else
        echo "0";
}
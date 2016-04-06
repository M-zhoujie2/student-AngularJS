<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/4
 * Time: 20:51
 */
$str = $_POST["name"];
if($str == "张三")
    echo "验证正确";
else
    echo "验证失败";
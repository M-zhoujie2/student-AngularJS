<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/4
 * Time: 22:05
 */
function checkNum($num){
    return ($num%2) ? TRUE : FALSE;
}
$num = $_GET['n'];
if(checkNum($num) === TRUE){
    echo "奇数";
}else{
    echo "偶数";
}
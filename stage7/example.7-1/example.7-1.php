<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/4
 * Time: 20:51
 */
header("Content-type: text/json");
$stulist = [
    ['Code' => '10101','Name'=>'刘真真','Score'=>'530'],
    ['Code' => '10102','Name'=>'张明基','Score'=>'460'],
    ['Code' => '10103','Name'=>'舒虎','Score'=>'660'],
    ['Code' => '10104','Name'=>'周小敏','Score'=>'500'],
    ['Code' => '10105','Name'=>'陆明明','Score'=>'300'],
];
echo json_encode($stulist);
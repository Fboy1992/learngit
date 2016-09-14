<?php
//测试文件
error_reporting(E_ALL & ~E_NOTICE);

$arr = array();
$arr1 = array(
  array('fund_code'=>1,'name'=>'哈哈'),
  array('fund_code'=>2,'name'=>'大大')
);

array_walk($arr1,function($val) use(&$arr){
  $arr[] = intval($val['fund_code']);
});

print_r($arr);
echo 'hahaha';

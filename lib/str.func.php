<?php
function str_to_arr($str,$join)
{
    $arr = explode($join, $str);
    array_walk($arr, function($v){
        strval($v);
    });
    return $arr;
}

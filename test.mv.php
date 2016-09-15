<?php
//test.php
$conn = mysql_connetc('localhost','root','ai');
mysql_query('set names utf8');
mysql_select_db('study');

$sql = "select * from demo01";
$rs = mysql_query($sql, $conn);

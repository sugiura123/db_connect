<!-- mysql→test1(DB)→bot(table) -->

<?php
$homepage1 = file_get_contents('http://www.apple.com/');
$bytes1 = strlen($homepage1);
//var_dump($bytes1)
?>

<?php
$homepage2 = file_get_contents('http://www.amazon.co.jp/');
$bytes2 = strlen($homepage2);
var_dump($bytes2);
?>

<?php
$homepage3 = file_get_contents('http://192.168.33.10/db_connect/db_connect.php');
$bytes3 = strlen($homepage3);
//var_dump($bytes3);
?>